<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function allOrders(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Все заказы пол-лей',
            'content' => OrderResource::collection(Order::all())
        ]);
    }
    public function all($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        return response()->json([
            'message' => 'Все заказы',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $user->id))
        ]);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        $order = Order::find($id);
        if(!$order){
            return response()->json([
                'message' => 'Заказа не обнаружено'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Просмотр заказа',
                'content' => new OrderResource($order)
            ], 200);
        }
    }
    public function countDone($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        return response()->json([
            'message' => 'Кол-во завершенных заказов',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $user->id)
                ->where('status', 'Завершено'))->count()
        ]);
    }
    public function countProcess($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        return response()->json([
            'message' => 'Кол-во заказов в обработке',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $user->id)
                ->where('status', 'В обработке'))->count()
        ]);
    }
    public function store($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        $myCart = CartResource::collection(Cart::all()->where('user_id', $user->id));

        if($myCart->count() == 0){
            return response()->json([
                'message' => 'Корзина пуста',
            ], 422);
        } else {
            $arr = [];
            $price = 0;

            foreach ($myCart as $item){
                $arr[] = [
                    'product_id' => $item->product_id,
                    'count' => $item->count
                ];

                $product = Product::find($item->product_id);
                $price += ($product->price * $item->count);

                $item->delete();
            }

            $order = Order::create([
                'products' => json_encode($arr),
                'user_id' => $user->id,
                'total_price' => $price,
                'status' => 'В обработке'
            ]);

            return response()->json([
                'message' => 'Заказ оформлен',
                'content' => $order
            ]);
        }
    }
    public function update(OrderRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $order = Order::find($id);
        if(!$order){
            return response()->json([
                'message' => 'Заказ не найден'
            ], 404);
        }
        $order->update([
            'status' => $request->input('status')
        ]);

        return response()->json([
            'message' => 'Статус обновлен на ' . $request->input('status'),
            'content' => $order
        ]);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $order = Order::find($id);
        if(!$order){
            return response()->json([
                'message' => 'Заказ не найден'
            ]);
        }
        $order->update([
            'status' => 'Отменен'
        ]);
        return response()->json([
            'message' => 'Заказ отменен',
            'content' => new OrderResource($order)
        ]);
    }
}

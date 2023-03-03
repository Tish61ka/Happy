<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderEditRequest;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function all(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::guard('sanctum')->user();
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
    public function countDone(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::guard('sanctum')->user();
        return response()->json([
            'message' => 'Кол-во завершенных заказов',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $user->id)
                ->where('status', 'Завершено'))->count()
        ]);
    }
    public function countProcess(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::guard('sanctum')->user();
        return response()->json([
            'message' => 'Кол-во заказов в обработке',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $user->id)
                ->where('status', 'В обработке'))->count()
        ]);
    }
    public function store(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::guard('sanctum')->user();
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
    public function update(OrderEditRequest $request, $id): \Illuminate\Http\JsonResponse
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

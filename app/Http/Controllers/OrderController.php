<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderEditRequest;
use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function allAdmin()
    {
        return response()->json([
            'message' => 'Все заказы',
            'content' => OrderResource::collection(Order::all())
        ]);
    }
    public function countOrders()
    {
        return response()->json([
            'message' => 'Кол-во заказов',
            'content' => Order::all()->last()->id,
        ]);
    }
    public function all(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Все заказы',
            'content' => OrderResource::collection(Order::all()
                ->where('user_id', $request->input('user_id')))
        ]);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        $order = Order::find($id);
        if (!$order) {
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
    public function store(Request $request)
    {
        $mycart = Cart::where('user_id', $request->input('user_id'))->get();
        $count = 0;
        for ($i = 0; $i < count($mycart); $i++) {
            $count += $mycart[$i]['count'];
        }
        Order::create([
            'user_id' => $request->input('user_id'),
            'total_price' => $request->input('summ'),
            'status' => 'В обработке',
            'total_count' => $count
        ]);

        $myorder = Order::select('id')->where('user_id', $request->input('user_id'))->get()->last();

        for ($i = 0; $i < count($mycart); $i++) {
            if ($mycart[$i]['product_id'] != null) {
                ProductOrder::create([
                    'id_order' => $myorder->id,
                    'id_product' => $mycart[$i]['product_id'],
                    'id_product_custom' => null,
                    'count' => $mycart[$i]['count']
                ]);
            } else {
                ProductOrder::create([
                    'id_order' => $myorder->id,
                    'id_product_custom' => $mycart[$i]['custom_id'],
                    'id_product' => null,
                    'count' => $mycart[$i]['count']
                ]);
            }
        }

        Cart::where('user_id', $request->input('user_id'))->delete();
    }
    public function update(OrderEditRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'message' => 'Заказ не найден'
            ], 404);
        }
        Order::where('id', $id)->update([
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
        if (!$order) {
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

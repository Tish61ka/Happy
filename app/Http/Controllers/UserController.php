<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryRequest;
use App\Http\Requests\DeliveryUpdateRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Все пол-ли',
            'content' => User::all()
        ]);
    }
    public function delivery(DeliveryRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::create($request->all());
        return response()->json([
            'message' => 'Пол-ль заполнен',
            'content' => $user
        ]);
    }
    public function update(DeliveryUpdateRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json([
            'message' => 'Пол-ль обновлен',
            'content' => $user
        ]);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $user = User::find($id);

        $carts = Cart::all()->where('user_id', $user->id);
        $reviews = Review::all()->where('user_id', $user->id);
        $orders = Order::all()->where('user_id', $user->id);

        if($reviews){
            foreach ($reviews as $review) {
                $review->delete();
            }
        }
        if($carts){
            foreach ($carts as $cart) {
                $cart->delete();
            }
        }
        if($orders){
            foreach ($orders as $order) {
                $order->delete();
            }
        }

        $user->delete();
        return response()->json([
            'message' => 'Пол-ль удален',
        ]);
    }
}

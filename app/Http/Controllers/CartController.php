<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function all($id): \Illuminate\Http\JsonResponse
  {
    $user = User::find($id);
    $myCart = Cart::all()->where('user_id', $user->id);

    return response()->json([
      'message' => 'Моя корзина',
      'content' => CartResource::collection($myCart),
    ]);
  }
  public function store(CartRequest $request): \Illuminate\Http\JsonResponse
  {
    $product = Product::find($request->input('product_id'));
    $user = User::find($request->user_id);
    $cartItem = Cart::where('product_id', $request->input('product_id'))
      ->where('user_id', $user->id)->first();

    $count = $request->input('count');
    if (!$cartItem) {
      $cart = Cart::create([
        'product_id' => $request->input('product_id'),
        'user_id' => $user->id,
        'count' => $request->input('count')
      ]);

      return response()->json([
        'message' => 'Товар добавлен в корзину',
        'content' => new CartResource($cart)
      ]);
    } else {
      $count = $cartItem->count + 1;
      $cartItem->update([
        'count' => $count,
      ]);

      return response()->json([
        'message' => 'Товар обновлен в корзине',
        'content' => new CartResource($cartItem)
      ]);
    }
  }
  public function MinusCart(CartRequest $request)
  {
    $product = Product::find($request->input('product_id'));
    $user = User::find($request->user_id);
    $cartItem = Cart::where('product_id', $request->input('product_id'))
      ->where('user_id', $user->id)->first();

    $count = $request->input('count');
    if ($cartItem->count == 1) {
      $cartItem->delete();
    } else {
      $count = $cartItem->count - 1;
      $cartItem->update([
        'count' => $count,
      ]);
    }
  }
  public function destroyAll(Request $request)
  {
    Cart::where('user_id', $request->input('user_id'))->delete();
  }
  public function destroy($id): \Illuminate\Http\JsonResponse
  {
    $cart = Cart::find($id);
    if (!$cart) {
      return response()->json([
        'message' => 'Товара нету в корзине'
      ]);
    }
    $cart->delete();

    return response()->json([
      'message' => 'Товар удален из корзины',
    ]);
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CustomProduct;
use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    public function create(Request $request)
    {
        CustomProduct::create([
            'title' => 'Custom Мороженное',
            'ball1' => $request->input('ball')[0],
            'ball2' => $request->input('ball')[1],
            'ball3' => $request->input('ball')[2],
            'wafer' => $request->input('wafer')[0],
            'price' => 300
        ]);

        $custom = CustomProduct::all()->last();

        Cart::create([
            'user_id' => $request->input('user_id'),
            'custom_id' => $custom->id,
            'count' => 1
        ]);
    }
}

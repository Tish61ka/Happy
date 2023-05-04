<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function all()
    {
        // return ReviewResource::collection(Review::all())
        return response()->json([
            'message' => 'Все отзывы',
            'content' => ReviewResource::collection(Review::all()),
        ]);
    }
    public function create(Request $request)
    {
        Review::create([
            'product_id' => $request->input('id_product'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
        ]);
    }
}

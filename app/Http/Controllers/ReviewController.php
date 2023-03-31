<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function all($id): \Illuminate\Http\JsonResponse
    {
        $reviews = Review::all()->where('product_id', $id);

        return response()->json([
            'message' => 'Все отзывы',
            'content' => ReviewResource::collection($reviews),
        ]);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        $reviews = Review::all()->where('user_id', $id);

        return response()->json([
            'message' => 'Все отзывы пол-ля',
            'content' => ReviewResource::collection($reviews)
        ]);
    }
    public function store(ReviewRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::find($request->user_id);
        $review = Review::create([
            'user_id' => $user->id,
            'product_id' => $request->input('product_id'),
            'content' => $request->input('content')
        ]);
        return response()->json([
            'message' => 'Отзыв создан',
            'content' => new ReviewResource($review),
        ]);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $review = Review::find($id);
        if(!$review){
            return response()->json([
                'message' => 'Отзыв не найден'
            ]);
        }
        $review->delete();

        return response()->json([
            'message' => 'Отзыв удален'
        ]);
    }
}

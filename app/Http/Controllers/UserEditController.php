<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEditController extends Controller
{
    public function delivery(DeliveryRequest $request): \Illuminate\Http\JsonResponse
    {
        $userID = Auth::guard('sanctum')->user()->id;
        $user = User::find($userID);
        $user->update($request->all());

        return response()->json([
            'message' => 'Данные о доставке приняты',
            'content' => new UserResource($user)
        ]);
    }
    public function editAboutMe(UserEditRequest $request): \Illuminate\Http\JsonResponse
    {
        $userID = Auth::guard('sanctum')->user()->id;
        $user = User::find($userID);
        // $path заготовка для аватарки
        $path = '';
        if($request->file('avatar')){
            // Если файл есть то здесь манипуляции
        }
        $user->update($request->all());

        return response()->json([
            'message' => 'Данные обновлены',
            'content' => new UserResource($user)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signIn(SignInRequest $request): \Illuminate\Http\JsonResponse
    {
        if (!Auth::attempt($request->all())) {
            return response()->json([
                'message' => 'Неверные данные',
            ], 401);
        }

        $user = Auth::user();
        // ВНЕДРИТЬ ПРОВЕРКУ НА БАН

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Вы успешно вошли',
            'content' => $token,
        ], 200);
    }
}

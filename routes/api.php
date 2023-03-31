<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/signUp', [AdminController::class, 'signUp']);
Route::post('/signIn', [AdminController::class, 'signIn']);

// Авторизация
Route::middleware('user')->group(function () {
    Route::get('/me', [AdminController::class, 'me']);
    Route::get('/logout', [AdminController::class, 'logout']);

    // Все заказы
    Route::get('/orders/all', [OrderController::class, 'allOrders']);
    // Все пол-ли
    Route::get('/users', [UserController::class, 'all']);
    // Число завершенных заказов заказов
    Route::get('/orders/done/{id}', [OrderController::class, 'countDone']);
    // Число заказов в обработке
    Route::get('/orders/process/{id}', [OrderController::class, 'countProcess']);
    // Изменение статус заказа ЧТО-ТО НЕ ТАК
    Route::patch('/orders/{id}', [OrderController::class, 'update']);
    // Создание продукта
    Route::post('/product', [ProductController::class, 'store']);
    // Изменения продукта
    Route::patch('/product/{id}', [ProductController::class, 'update']);
    // Удаление продукта
    Route::delete('/product/{id}', [ProductController::class, 'destroy']);

});

// Все Товары
Route::get('/products', [ProductController::class, 'all']);
// Открытие товара
Route::get('/product/{id}', [ProductController::class, 'index']);
// ------------------------------------------------------------------------
// Оформление заказа
Route::post('/order/{id}', [OrderController::class, 'store']);
// Все заказы пол-ля
Route::get('/orders/{id}', [OrderController::class, 'all']);
// Просмотреть заказ
Route::get('/orders/view/{id}', [OrderController::class, 'index']);
// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
// Все отзывы определенного продукта
Route::get('/reviews/{id}', [ReviewController::class, 'all']);
// Все отзывы пол-ля
Route::get('/reviews/my/{id}', [ReviewController::class, 'index']);
// Создание отзыва
Route::post('/reviews', [ReviewController::class, 'store']);
// Удаление отзыва
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
// ------------------------------------------------------------------------

// Добавление товара в корзину
Route::post('/cart/add', [CartController::class, 'store']);
// Просмотр корзины
Route::get('/cart/{id}', [CartController::class, 'all']);
// Удаление товара из корзины
Route::delete('/cart/{id}', [CartController::class, 'destroy']);


// Заполнение данных о доставке
Route::post('/me/delivery', [UserController::class, 'delivery']);
// Редактирование данных о доставке
Route::patch('/me/delivery/edit/{id}', [UserController::class, 'update']);
// Удаление данных о пол-ле
Route::delete('/me/delete/{id}', [UserController::class, 'destroy']);

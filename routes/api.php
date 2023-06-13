<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\UserEditController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/signUp', [AuthController::class, 'signUp']);
Route::post('/signIn', [SignInController::class, 'signIn']);
// Авторизация
Route::middleware('user')->group(function () {
  Route::get('/me', [SignInController::class, 'me']);
  Route::get('/logout', [SignInController::class, 'logout']);

  Route::middleware('admin')->group(function () {
    // Пользователи
    Route::get('/users', [UserController::class, 'all']);
    Route::get('/admin/users/count', [UserController::class, 'countUsers']);
    // Route::get('/users/{id}', [UserController::class, 'show']);

    Route::get('/reviews', [ReviewController::class, 'all']);
  });
  // Редактирование данных о доставке
  Route::patch('/me/delivery', [UserEditController::class, 'delivery']);
  // Редактирование данных
  Route::patch('/me/edit', [UserEditController::class, 'editAboutMe']);
  // Добавление товара в корзину
  Route::post('/cart/add', [CartController::class, 'store']);
  // Просмотр корзины
  Route::get('/cart', [CartController::class, 'all']);
  // Удаление товара из корзины
  Route::delete('/cart/{id}', [CartController::class, 'destroy']);

  // ------------------------------------------------------------------------
  // Оформление заказа
  // Число завершенных заказов заказов
  Route::get('/orders/done', [OrderController::class, 'countDone']);
  // Число заказов в обработке
  Route::get('/orders/process', [OrderController::class, 'countProcess']);
  // Все заказы пол-ля
  // Просмотреть заказ
  Route::get('/orders/{id}', [OrderController::class, 'index']);
  // Изменение статус заказа ЧТО-ТО НЕ ТАК
  // ------------------------------------------------------------------------
  // ------------------------------------------------------------------------
  // Все отзывы определенного продукта
  // Route::get('/reviews/{id}', [ReviewController::class, 'all']);
  // // Все отзывы пол-ля
  // Route::get('/reviews/my/{id}', [ReviewController::class, 'index']);
  // // Создание отзыва
  // Route::post('/reviews', [ReviewController::class, 'store']);
  // // Удаление отзыва
  // Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
  // ------------------------------------------------------------------------

});

// Товары
Route::get('/products', [ProductController::class, 'all']);
Route::get('/product/{id}', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::post('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
Route::get('/admin/orders/count', [OrderController::class, 'countOrders']);

Route::delete('/delete/user/{id}', [UserController::class, 'destroy']);

Route::delete('/delete/review/{id}', [ReviewController::class, 'destroy']);


Route::post('/create/review/', [ReviewController::class, 'create']);
Route::get('/all/reviews', [ReviewController::class, 'all']);

Route::post('/create/custom', [CustomProductController::class, 'create']);


Route::post('/order', [OrderController::class, 'store']);
Route::post('/orders', [OrderController::class, 'all']);
Route::get('/admin/orders', [OrderController::class, 'allAdmin']);
Route::post('/orders/{id}', [OrderController::class, 'update']);

Route::get('/cart/all/{id}', [CartController::class, 'all']);
Route::delete('/cart/destroy/{id}', [CartController::class, 'destroy']);
Route::post('/cart/destroyall', [CartController::class, 'destroyAll']);
Route::post('/delivery/create', [UserController::class, 'delivery']);
Route::get('/all/products', [ProductController::class, 'all']);
Route::get('/catalog', [ProductController::class, 'catalog']);
Route::patch('/add/to/cart', [CartController::class, 'store']);
Route::patch('/minus/to/cart', [CartController::class, 'MinusCart']);
Route::get('/alltypes', [TypeController::class, 'show']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
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
Route::post('/signIn', [AuthController::class, 'signIn']);

// Авторизация
Route::middleware('user')->group(function () {
  Route::get('/me', [AuthController::class, 'me']);
  Route::get('/logout', [AuthController::class, 'logout']);

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
  Route::post('/order', [OrderController::class, 'store']);
  // Число завершенных заказов заказов
  Route::get('/orders/done', [OrderController::class, 'countDone']);
  // Число заказов в обработке
  Route::get('/orders/process', [OrderController::class, 'countProcess']);
  // Все заказы пол-ля
  Route::get('/orders', [OrderController::class, 'all']);
  // Просмотреть заказ
  Route::get('/orders/{id}', [OrderController::class, 'index']);
  // Изменение статус заказа ЧТО-ТО НЕ ТАК
  Route::patch('/orders/{id}', [OrderController::class, 'update']);
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

});

// Товары
Route::get('/products', [ProductController::class, 'all']);
Route::get('/product/{id}', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::patch('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);




// Пользователи
//Route::get('/users', [UserController::class, 'all']);
//Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/cart/all/{id}', [CartController::class, 'all']);
Route::delete('/cart/destroy/{id}', [CartController::class, 'destroy']);
Route::post('/delivery/create', [UserController::class, 'delivery']);
Route::get('/all/products', [ProductController::class, 'all']);
Route::get('/catalog', [ProductController::class, 'catalog']);
Route::patch('/add/to/cart', [CartController::class, 'store']);
Route::get('/alltypes', [TypeController::class, 'show']);

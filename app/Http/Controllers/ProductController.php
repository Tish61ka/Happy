<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
  public function catalog()
  {
    $pagination = DB::table('products')->paginate(6);
    $items = $pagination->items();
    $products = [];
    foreach ($items as $item) {
      $products[] = Product::find($item->id);
    }
    return response()->json([
      'message' => 'Для Каталога',
      'content' => $pagination,
      'products' => ProductResource::collection($products)
    ]);
  }
  public function all(): \Illuminate\Http\JsonResponse
  {
    return response()->json([
      'message' => 'Все товары',
      'content' => ProductResource::collection(Product::all())
    ], 200);
  }
  public function index($id): \Illuminate\Http\JsonResponse
  {
    return response()->json([
      'message' => 'Вывод товара',
      'content' => new ProductResource(Product::find($id))
    ], 200);
  }
  public function store(StoreRequest $request): \Illuminate\Http\JsonResponse
  {
    // dd($request->all());
    $file = $request->file('image');
    $file->move(public_path('img'), $file->getClientOriginalName());
    $path = '/img/' . $file->getClientOriginalName();

    $product = Product::create([
      'title' => $request->input('title'),
      'description' => $request->input('discription'),
      'price' => $request->input('price'),
      'structure' => $request->input('structure'),
      'type' => $request->input('type'),
      'image' => $path
    ]);

    return response()->json([
      'message' => 'Товар создан',
      'content' => new ProductResource($product)
    ], 200);
  }
  public function update(UpdateRequest $request, $id): \Illuminate\Http\JsonResponse
  {
    $product = Product::find($id);
    $file = $request->file('image');
    $path = '';

    if (!$product) {
      return response()->json([
        'message' => 'Товара не существует'
      ]);
    }
    if ($file) {
      Storage::disk('public')->delete($product->image);
      $path = Storage::disk('public')->put('products', $file);
      $product->image = $path;
      $product->save();
    }
    $product->update($request->all());

    return response()->json([
      'content' => [
        'content' => new ProductResource($product),
        'message' => 'Данные обновлены'
      ]
    ], 200);
  }
  public function destroy($id): \Illuminate\Http\JsonResponse
  {
    $product = Product::find($id);
    if (!$product) {
      return response()->json([
        'message' => 'Товар уже удален'
      ]);
    }
    Storage::disk('public')->delete($product->image);
    $product->delete();

    return response()->json([
      'message' => 'Товар удален'
    ]);
  }
}

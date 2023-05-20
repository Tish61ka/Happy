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
  public function update(Request $request, $id)
  {
    if ($request->input('type') == "[object Object]") {
      Product::where('id', $id)->update([
        'title' => $request->input('title'),
        'price' => $request->input('price'),
        'structure' => $request->input('structure'),
        'description' => $request->input('discription')
      ]);
    } else {
      Product::where('id', $id)->update([
        'title' => $request->input('title'),
        'price' => $request->input('price'),
        'structure' => $request->input('structure'),
        'description' => $request->input('discription'),
        'type' => $request->input('type')
      ]);
    }

    $file = $request->file('image');

    if ($file != null) {
      $file->move(public_path('img'), $file->getClientOriginalName());
      $path = '/img/' . $file->getClientOriginalName();
      Product::where('id', $id)->update([
        'image' => $path
      ]);
    }
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

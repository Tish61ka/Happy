<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function all(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Все товары',
            'content' => Product::all()
        ], 200);
    }
    public function index($id): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Вывод товара',
            'content' => Product::find($id)
        ], 200);
    }
    public function store(ProductRequest $request): \Illuminate\Http\JsonResponse
    {
        $file = $request->file('image');
        $path = Storage::disk('public')->put('products', $file);

        $product = Product::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'structure' => $request->input('structure'),
            'image' => $path
        ]);

        return response()->json([
            'message' => 'Товар создан',
            'content' => $product
        ], 200);
    }
    public function update(ProductEditRequest $request, $id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        $file = $request->file('image');
        $path = '';

        if(!$product){
            return response()->json([
                'message' => 'Товара не существует'
            ]);
        }
        if($file){
            Storage::disk('public')->delete($product->image);
            $path = Storage::disk('public')->put('products', $file);
            $product->image = $path;
            $product->save();
        }
        $product->update($request->all());

        return response()->json([
            'content' => [
                'content' => $product,
                'message' => 'Данные обновлены'
            ]
        ], 200);
    }
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        if(!$product){
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

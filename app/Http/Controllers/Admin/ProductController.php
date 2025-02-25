<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return response()->success($products, 'success');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::query()->create($request->validated());

        return response()->success($product, 'success');
    }


    public function show(Product $product)
    {
        return response()->success($product, 'success');
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return response()->success($product, 'success');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->success($categories, 'success');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::query()->create($request->validated());

        return response()->success($category, 'success');
    }


    public function show(Category $category)
    {
        return response()->success($category, 'success');
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->success($category, 'success');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->success(null, 'success');
    }
}

<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


////////////////////Products///////////////////
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});




////////////////////Categories///////////////////
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

});

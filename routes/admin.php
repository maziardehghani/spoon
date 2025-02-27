<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FileController;
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



////////////////////Articles///////////////////
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/show/{category}', [ArticleController::class, 'show'])->name('articles.show');
    Route::post('/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::put('/update/{category}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/delete/{category}', [ArticleController::class, 'destroy'])->name('articles.destroy');

});



/////////////////////////Files///////////////////////////
Route::prefix('files')->group(function () {

    Route::post('/store', [FileController::class, 'store'])
        ->name('files.store');


    Route::post('/replace', [FileController::class, 'replace'])
        ->name('files.replace');


    Route::delete('/delete/{media}', [FileController::class, 'delete'])
        ->name('files.delete');

});

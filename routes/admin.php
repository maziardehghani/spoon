<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


////////////////////Products///////////////////
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
});


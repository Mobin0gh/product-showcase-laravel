<?php
use App\Http\Controllers\Admin\ProductController as AdminProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/products/{products}', [ProductController::class, 'show'])->name('products.show');
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('products', AdminProductController::class);
    });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/cart', [PageController::class, 'cart']);
Route::get('/checkout', [PageController::class, 'checkout']);
Route::get('/contoh', [PageController::class, 'contoh']);
Route::get('/layout', [PageController::class, 'layout']);

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);
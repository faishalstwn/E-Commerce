<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

// ShopVerse E-Commerce Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/contoh', [PageController::class, 'contoh']);
Route::get('/layout', [PageController::class, 'layout']);

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

// Admin Protected Routes (Tugas Role & Middleware Admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        $totalProducts = \App\Models\Product::count();
        $totalCategories = \App\Models\Category::count();
        $totalClicks = \App\Models\Product::sum('clicks');
        $topProducts = \App\Models\Product::with('category')->orderByDesc('clicks')->take(5)->get();

        return view('dashboard', compact('totalProducts', 'totalCategories', 'totalClicks', 'topProducts'));
    })->name('admin.dashboard');
});

// General Dashboard Route (redirects to admin dashboard if admin, or accessible for logged in admin)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


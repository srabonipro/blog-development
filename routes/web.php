<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome');
});

// Frontend Routes
Route::get('/home', [FrontendController::class, 'home'])->name('frontend.home');


// Frontend Routes
Route::get('/admin/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
});

require __DIR__ . '/auth.php';

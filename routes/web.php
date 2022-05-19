<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

// Profile
Route::get('/profile', [UserController::class, 'profile'])->name('admin.profile');
Route::get('/profile-setting', [UserController::class, 'profileSetting'])->name('admin.profile.setting');


// Frontend Routes
Route::get('/home', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/{post:slug}', [FrontendController::class, 'post'])->name('frontend.post');


// Backend Routes
Route::get('/admin/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/users', UserController::class);
});

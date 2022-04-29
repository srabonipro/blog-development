<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->group(function(){
    Route::resource('/products', ProductController::class);
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactSettingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralSettingController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

// Profile
Route::get('/profile', [UserController::class, 'profile'])->name('admin.profile');
Route::get('/profile-setting', [UserController::class, 'profileSetting'])->name('admin.profile.setting');


// Frontend Routes
Route::get('/home', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('frontend.contact.store');

Route::get('/{post:slug}', [FrontendController::class, 'post'])->name('frontend.post');
Route::get('categories/{category:slug}', [FrontendController::class, 'category'])->name('frontend.category');


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
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/show/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    // Setting Routes
    Route::get('contact-setting', [ContactSettingController::class, 'contactSettingIndex'])->name('contact_settings.index');
    Route::put('contact-setting/{contactSetting}', [ContactSettingController::class, 'contactSettingUpdate'])->name('contact_settings.update');
    Route::get('general-setting', [GeneralSettingController::class, 'index'])->name('general_settings.index');
    Route::put('general-setting/{generalSetting}', [GeneralSettingController::class, 'generalSettingUpdate'])->name('general_settings.update');
});

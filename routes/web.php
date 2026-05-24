<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

Route::middleware(['auth', 'role:admin,author'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
});

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

Route::middleware(['auth', 'role:admin,author'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
    Route::put('post/publish/{id}', [PostController::class, 'postPublish'])->name('post.publish');
    Route::put('post/archived/{id}', [PostController::class, 'postArchived'])->name('post.archived');

    Route::put('user/status/{id}', [UserController::class, 'userStatus'])->name('user.status');


    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
});

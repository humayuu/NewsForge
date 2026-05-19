<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

Route::middleware(['auth', 'role:admin,author'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
});

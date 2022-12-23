<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PostController;

Route::group([
    'as' => 'backend.',
    'prefix' => 'backend',
    // 'middleware' => ['library.menu'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    // Route::get('/editor', [HomeController::class, 'editor'])->name('home.editor');
    Route::get('/gutenberg', [HomeController::class, 'gutenberg'])->name('home.gutenberg');
    Route::resource('menus', MenuController::class);
    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('posts', PostController::class);
});

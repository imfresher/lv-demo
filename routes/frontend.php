<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\VideoController;

Route::group([
    'as' => 'frontend.',
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
});

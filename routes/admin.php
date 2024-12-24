<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Settings\SearchController;
use \Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth', 'permission']
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group([
        'as' => 'settings.',
        'prefix' => 'settings',
    ], function () {
        Route::get('/search', [SearchController::class, 'search'])->name('search');
    });
});

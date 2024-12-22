<?php

use App\Http\Controllers\Admin\HomeController;
use \Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth', 'permission']
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

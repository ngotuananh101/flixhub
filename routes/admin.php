<?php

use \Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth', 'permission']
], function () {
    Route::get('/', function () {
        return 'Admin dashboard';
    });
});

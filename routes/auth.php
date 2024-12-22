<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::group(['middleware' => 'guest'], function () {
        // Login routes
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');

        // Forgot password routes
        Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
        Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        // Reset password routes
        Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
        Route::post('reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});

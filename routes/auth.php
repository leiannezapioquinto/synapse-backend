<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthenticationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\PasswordController;

Route::prefix('auth')->group(function () {
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [UserAuthenticationController::class, 'login']);
    Route::post('/password/forgot', [PasswordController::class, 'sendResetLinkEmail']);
    Route::post('/password/reset', [PasswordController::class, 'reset']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [UserAuthenticationController::class, 'logout']);
        Route::get('/session-data', [UserAuthenticationController::class, 'me']);
        Route::post('/password/change', [PasswordController::class, 'change']);
    });
});

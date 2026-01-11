<?php

use Illuminate\Support\Facades\Route;

/* API Routes */

Route::group(['prefix' => '/v1', 'middleware' => ['filters'], 'as' => 'v1.'], function () {
    Route::group(['middleware' => 'api.throttle'], function () {
        include(__DIR__ . '/auth.php');
        include(__DIR__ . '/frontend.php');
    });

    include(__DIR__ . '/public.php');
});

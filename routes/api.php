<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned the "api"
| middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/v1', 'as' => 'v1.'], function () {
    include(__DIR__ . '/auth.php');
    include(__DIR__ . '/frontend.php');
    include(__DIR__ . '/public.php');
});

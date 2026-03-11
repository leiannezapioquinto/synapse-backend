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

Route::prefix('v1')->name('v1.')->group(function () {
    require __DIR__.'/auth.php';
    Route::middleware(['web', 'auth:sanctum'])->group(function () {
        require __DIR__.'/frontend.php';
    });
    require __DIR__.'/public.php';
});

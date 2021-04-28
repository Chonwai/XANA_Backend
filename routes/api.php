<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('shopify')->group(function () {
    Route::prefix('products')->group(function () {
        Route::post('/new', function (Request $request) {
            echo (json_encode($request));
        });

        Route::post('/update', function (Request $request) {
            echo (json_encode($request));
        });
    });

    Route::prefix('orders')->group(function () {
        Route::post('/new', function (Request $request) {
            echo (json_encode($request));
        });
    });

    Route::prefix('users')->group(function () {
        Route::post('/new', function (Request $request) {
            echo (json_encode($request));
        });
    });
});

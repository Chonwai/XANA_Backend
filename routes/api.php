<?php

use App\Http\Controllers\Apis\OrderController;
use App\Http\Controllers\Apis\ProductController;
use App\Http\Controllers\Apis\UserController;
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
        Route::post('/new', [ProductController::class, 'insert']);

        Route::post('/update', function (Request $request) {
            echo (json_encode($request));
        });
    });

    Route::prefix('orders')->group(function () {
        Route::post('/new', [OrderController::class, 'insert']);
    });

    Route::prefix('users')->group(function () {
        Route::post('/new', [UserController::class, 'insert']);

        Route::get('/all', [UserController::class, 'responseAll']);
    });
});

<?php

use App\Http\Controllers\CouponController;
use App\Http\Controllers\StatusCodeController;
use App\Http\Controllers\SecurityController;
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

Route::group(['prefix' => 'coupon'], function () {
    Route::get('/', [CouponController::class, 'index']);
    Route::get('/search', [CouponController::class, 'search']);
    Route::get('/{id}', [CouponController::class, 'show']);
    Route::post('/', [CouponController::class, 'store']);
    Route::delete('/{id}', [CouponController::class, 'destroy']);
});

Route::group(['prefix' => 'status'], function () {
    Route::get('/', [StatusCodeController::class, 'index']);
});

Route::group(['prefix' => 'security'], function () {
    Route::get('/', [SecurityController::class, 'index']);
});

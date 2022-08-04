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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kirim-data/{Watt}', [App\Http\Controllers\ApiController::class, 'kirim_data']);

Route::group(['namespace' => '', 'prefix' => 'get-status'], function () {
    Route::get('/teras-rumah', [App\Http\Controllers\ApiKontrolController::class, 'TerasRumah']);
    Route::get('/ruang-tamu', [App\Http\Controllers\ApiKontrolController::class, 'RuangTamu']);
    Route::get('/kamar-utama', [App\Http\Controllers\ApiKontrolController::class, 'KamarUtama']);
    Route::get('/kamar-kedua', [App\Http\Controllers\ApiKontrolController::class, 'KamarKedua']);
    Route::get('/dapur', [App\Http\Controllers\ApiKontrolController::class, 'Dapur']);
    Route::get('/toilet', [App\Http\Controllers\ApiKontrolController::class, 'Toilet']);
});

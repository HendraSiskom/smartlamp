<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => '', 'prefix' => 'beranda'], function () {
    Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
});

Route::group(['namespace' => '', 'prefix' => 'kontrol'], function () {
    Route::get('/', [App\Http\Controllers\KontrolController::class, 'index'])->name('kontrol');
});

Route::group(['namespace' => '', 'prefix' => 'log-kontrol'], function () {
    Route::get('/', [App\Http\Controllers\LogKontrolController::class, 'index'])->name('log-kontrol');
    Route::get('/show', [App\Http\Controllers\LogKontrolController::class, 'show'])->name('log-kontrol.show');
});

Route::group(['namespace' => '', 'prefix' => 'laporan-data'], function () {
    Route::get('/', [App\Http\Controllers\LaporanDataController::class, 'index'])->name('laporan-data');
    Route::get('/show', [App\Http\Controllers\LaporanDataController::class, 'show'])->name('laporan-data.show');
});

Route::group(['namespace' => '', 'prefix' => 'laporan-total-daya'], function () {
    Route::get('/', [App\Http\Controllers\LaporanTotalDayaController::class, 'index'])->name('laporan-total-daya');
    Route::get('/show', [App\Http\Controllers\LaporanTotalDayaController::class, 'show'])->name('laporan-total-daya.show');
});

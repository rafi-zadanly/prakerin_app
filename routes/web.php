<?php

use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => 'custom'], function () {
    Route::get('login', [UserController::class, 'index']);
    Route::post('login', [UserController::class, 'login']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('dashboard', [UserController::class, 'dashboard']);
<<<<<<< HEAD
    Route::get('report', [UserController::class, 'report']);

    Route::group(['prefix' => 'pengajuan'], function () {
        Route::get('/', [PengajuanController::class, 'index']);
        Route::post('store', [PengajuanController::class, 'store']);
    });
=======
    Route::get('pengajuan', [UserController::class, 'pengajuan']);
    Route::get('base', [UserController::class, 'base']);
>>>>>>> 0728666979bc27e9e166bb7d86b783f78de5b887
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

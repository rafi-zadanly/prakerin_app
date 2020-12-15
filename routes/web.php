<?php

use App\Http\Controllers\HomeController;
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
    Route::get('pdf', [HomeController::class, 'generatePDF']);
    Route::get('login', [UserController::class, 'index']);
    Route::post('login', [UserController::class, 'login']);
    Route::get('logout', [UserController::class, 'logout']);
<<<<<<< HEAD
    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::get('pengajuan', [UserController::class, 'pengajuan']);
    Route::get('status_siswa', [UserController::class, 'status_siswa']);
    Route::get('base', [UserController::class, 'base']);
=======

    Route::group(['middleware' => ['custom.auth']], function () {
        Route::get('dashboard', [UserController::class, 'dashboard']);
        Route::get('report', [UserController::class, 'report']);

        Route::group(['prefix' => 'pengajuan'], function () {
            Route::get('/', [PengajuanController::class, 'index']);
            Route::post('store', [PengajuanController::class, 'store']);
            Route::post('destroy', [PengajuanController::class, 'destroy']);
        });
    });
>>>>>>> 9da17952744b602acf913a06effa5246a75f1f17
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

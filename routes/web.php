<?php

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
    Route::get('laporan-pdf', 'HomeController@generatePDF');
    Route::get('login', [UserController::class, 'index']);
    Route::post('login', [UserController::class, 'login']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::get('pengajuan', [UserController::class, 'pengajuan']);
    Route::get('report', [UserController::class, 'report']);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

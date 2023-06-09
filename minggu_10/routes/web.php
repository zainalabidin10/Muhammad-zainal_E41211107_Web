<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\cobaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/session', [sessionController::class, 'create']);
Route::get('/session/show', [sessionController::class, 'show']);
Route::get('/session/delete', [sessionController::class, 'delete']);

// menampilkan nama pegawai
Route::get('/pegawai/{nama}', [pegawaiController::class, 'index']);
// request
Route::get('/formulir', [pegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [pegawaiController::class, 'proses']);
//handling error
Route::get('/cobaerror/{nama?}', [cobaController::class, 'index']);
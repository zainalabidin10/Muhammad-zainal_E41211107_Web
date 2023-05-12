<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendidikanController;
use Illuminate\Support\Facades\Route;

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


Route::resource('/',HomeController::class);

Route::resource('dashboard',DashboardController::class);
// untuk menuju ke halaman pengelaman kerja
Route::resource('pengalaman_kerja',PendidikanController::class);
// untuk menghapus data
Route::delete('/pengalaman_kerja/{id}', [PendidikanController::class, 'destroy'])->name('pengalaman_kerja.destroy');


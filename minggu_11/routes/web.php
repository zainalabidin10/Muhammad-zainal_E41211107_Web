<?php

use App\Http\Controllers\UploadController;
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

//untuk upload 
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/proses_upload', [UploadController::class, 'proses_upload']);
//untuk resize gambar
Route::Post('/upload/resize', [UploadController::class, 'resize_upload']);
//dropzone image
Route::get('/dropzone', [UploadController::class, 'dropzone']);
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store']);
//dropzone pdf
Route::get('/pdf', [UploadController::class, 'pdf_upload']);
Route::post('/pdf/store', [UploadController::class, 'pdf_store']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JobdeskController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\EditorController;


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
    return view('temp/v_temp');
});

// Route::get('/view', function () {
//     return view('view');
// });

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login'); 
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::group(['middleware' => ['auth','checkLevel:Admin']],function(){
    Route::get('/dashboard', function () {
        return view('v_home');
    });
Route::get('/user', [UserController::class,'index'])->name('user'); 
Route::get('/user', [UserController::class,'index'])->name('user'); 
Route::get('/user/add', [UserController::class,'add']); 
Route::post('/user/tambah', [UserController::class,'tambah']);
Route::get('/user/detail/{id}', [UserController::class,'detail']);
Route::get('/user/editprofil/{id}', [UserController::class,'edit']);
Route::post('/user/update/{id}', [UserController::class,'update']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


Route::get('/verifikasi', [VerifikasiController::class,'index']); 

});



Route::get('/barcode', [QRCodeController::class, 'index'])->name('barcode');
Route::post('/barcode/update/{id}', [QRCodeController::class,'update']);
Route::get('/create', [QRCodeController::class, 'create']);
Route::post('/barcode/tambah',[QRCodeController::class,'tambah']);
Route::get('/barcode/hapus/{id}', [QRCodeController::class, 'hapus']);

Route::get('/surat', [SuratController::class,'index'])->name('surat'); 
Route::get('/surat/add', [SuratController::class,'add']); 
Route::post('/surat/tambah', [SuratController::class,'tambah']);
Route::get('/surat/hapus/{id}', [SuratController::class, 'hapus']);

// Route::get('/editor', function () {
//     return view('v_editor');
// });

Route::get('/editor', [EditorController::class, 'editor']);

Route::group(['middleware' => ['auth','checkLevel:Admin,Pejabat']],function(){
    Route::get('/', function () {
        return view('v_home');
    });
    Route::get('/verifikasi', [VerifikasiController::class,'index'])->name('verifikasi'); 
    Route::get('/verifikasi/add', [VerifikasiController::class,'add'])->name('v_addverifikasi');; 
    Route::post('/verifikasi/tambah', [VerifikasiController::class,'tambah']);
    Route::get('/verifikasi/hapus/{id}', [VerifikasiController::class, 'hapus']);
    Route::get('/verifikasi/detail/{id}', [VerifikasiController::class,'detail'])->name('pengajuan');
    Route::get('/verifikasi/view/{id}', [VerifikasiController::class,'view']);
    Route::get('/verifikasi/dview/{id}', [VerifikasiController::class,'dview']);

});


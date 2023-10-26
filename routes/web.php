<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamankerjaController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;

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
//Route BKPM ACARA MINGGU 10
Route::get('/session/create',[SessionController::class,'create']);
Route::get('/session/show',[SessionController::class,'show']);
Route::get('/session/delete',[SessionController::class,'delete']);

Route::get('/pegawai/{dedi}',[PegawaiController::class,'index']);
Route::get('/formulir',[PegawaiController::class,'formulir']);
Route::post('/formulir/proses',[PegawaiController::class,'proses'])->name('/formulir/proses');

Route::get('/cobaerror/{dedi?}',[CobaController::class,'index']);

//END Route BKPM ACARA MINGGU 10

//Route BKPM ACARA MINGGU 11
Route::get('/upload',[UploadController::class,'upload'])->name('upload');
Route::post('/upload/proses',[UploadController::class,'proses_upload'])->name('/upload/proses');
Route::post('/upload/resize',[UploadController::class,'resize_upload'])->name('upload.resize');
Route::get('/dropzone',[UploadController::class,'dropzone'])->name('dropzone');
Route::post('/dropzone/store',[UploadController::class,'dropzone_store'])->name('dropzone.store');
Route::get('/pdf',[UploadController::class,'pdf_upload'])->name('pdf_upload');
Route::post('/pdf/store',[UploadController::class,'pdf_store'])->name('pdf.store');
//END Route BKPM ACARA MINGGU 11

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('.beranda.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('pengalaman',PengalamankerjaController::class);
Route::resource('pendidikan',PendidikanController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/profile',function(){
    //
})->middleware(CheckAge::class);

require __DIR__.'/auth.php';

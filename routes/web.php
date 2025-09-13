<?php

use App\Http\Controllers\MatkulController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/matkul',[MatkulController::class,'index']);
Route::post('/matkul',[MatkulController::class,'store']);

Route::get('/ruangan',[RuanganController::class,'index']);
Route::post('/ruangan',[RuanganController::class,'store']);

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::post('/mahasiswa',[MahasiswaController::class,'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function () {
    return "Hello world dari Laravel!";
});

Route::get('/nama', function () {
    return "Nama saya Nina🙏";
});

Route::get('/kelas', function () {
    return "Kelas: ASE-10";
});
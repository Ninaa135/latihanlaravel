<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function () {
    return "Hello world dari Laravel!";
});

Route::get('/nama', function () {
    return "Nama saya Nina🙏";
});
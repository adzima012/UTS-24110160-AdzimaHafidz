<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HargaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('harga', HargaController::class);
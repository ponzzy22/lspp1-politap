<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

Route::get('/', function () {
    return view('beranda');
});
Route::get('admin', function () {
    return view('dashboard');
});

Route::get('sett-beranda', [BerandaController::class, 'index']);
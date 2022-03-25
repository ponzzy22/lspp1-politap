<?php

use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

Route::get('/', function () {
    return view('beranda');
});
Route::get('admin', function () {
    return view('dashboard');
});

Route::resource('sett-beranda', UiController::class);
Route::get('/', [UiController::class, 'ui_beranda']);
Route::resource('beranda_img1', Beranda_img1Controller::class);
Route::resource('beranda_img2', Beranda_img2Controller::class);


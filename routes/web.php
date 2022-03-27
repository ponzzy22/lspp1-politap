<?php

use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\StrorgController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;

Route::get('/', function () {
    return view('beranda');
});
Route::get('admin', function () {
    return view('dashboard');
});
Route::get('profil', function () {
    return view('front/profil');
});
Route::get('strorg1', function () {
    return view('front/strorg');
});
Route::get('skema1', function () {
    return view('front/skema');
});

Route::resource('sett-beranda', UiController::class);
Route::get('/', [UiController::class, 'ui_beranda']);
Route::resource('beranda_img1', Beranda_img1Controller::class);
Route::resource('beranda_img2', Beranda_img2Controller::class);
Route::resource('f_profil', F_profilController::class);
Route::get('profil', [UiController::class, 'profil']);
Route::resource('strorg', StrorgController::class);
Route::get('strorg1', [UiController::class, 'show_strorg']);
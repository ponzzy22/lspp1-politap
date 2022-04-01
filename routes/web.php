<?php

use App\Http\Controllers\AsesorController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AsuController;
use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\StrorgController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UiController;
use App\Models\Asesor;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;


Route::get('/', function () {
    return view('beranda');
});

Route::get('profil', function () {
    return view('front/profil');
});

Route::get('skema1', function () {
    return view('front/skema');
});

Route::get('strorg1', function () {
    return view('front/strorg');
});

Route::get('/', [UiController::class, 'ui_beranda']);
Route::get('profil', [UiController::class, 'profil']);
Route::get('strorg1', [UiController::class, 'show_strorg']);

Auth::routes();

Route::group(['middleware' => 'role:admin'], function(){
    Route::get('backend', function () {
        return view('backend');
    });

    Route::resource('sett-beranda', UiController::class);
    Route::resource('beranda_img1', Beranda_img1Controller::class);
    Route::resource('beranda_img2', Beranda_img2Controller::class);
    Route::resource('f_profil', F_profilController::class);
    Route::resource('strorg', StrorgController::class);
    Route::resource('skema', SkemaController::class);
    Route::resource('prodi', ProdiController::class);
    Route::resource('asesor', AsesorController::class);
    Route::resource('tuk', TukController::class);

});

Route::group(['middleware' => 'role:user'], function(){
    Route::get('asesion', function () {
        return view('asesion');
    });
});

Route:: get('/asesion', [App\Http\Controllers\HomeController::class, 'index3'])->name('asesion');
Route::middleware('role:admin')->get('backend', [App\Http\Controllers\HomeController::class, 'index2'])->name('backend');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AsuController;
use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\StrorgController;
use App\Http\Controllers\UiController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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
// Route::resource('/asu', AsuController::class);
Route::get('/asu', [AsuController::class, 'index']);

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
});

Route::group(['middleware' => 'role:user'], function(){
    Route::get('frontend', function () {
        return view('frontend');
    });
});

Route:: get('/frontend', [App\Http\Controllers\HomeController::class, 'index3'])->name('frontend');
Route::middleware('role:admin')->get('backend', [App\Http\Controllers\HomeController::class, 'index2'])->name('backend');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


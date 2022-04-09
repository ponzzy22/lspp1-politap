<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesmanController;
use App\Http\Controllers\AsesMandiriController;
use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\AsesorController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AsuController;
use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SantetController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\StrorgController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\UnikomController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\XnxxController;
use App\Models\Asesor;
use App\Models\Unikom;
use App\Models\Skema;
use App\Models\Xnxx;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;


Route::get('/', function () {
    return view('beranda');
});

Route::get('profil', function () {
    return view('front/profil');
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

    Route::get('show_asesmen/{id}', [SkemaController::class, 'show_asesmen'])->name('show_asesmen');
    Route::get('detail/{id}', [SkemaController::class, 'detail'])->name('skema.detail');

    Route::resource('skema', SkemaController::class);
    Route::resource('asesmen', AsesmenController::class);
    Route::resource('sett-beranda', UiController::class);
    Route::resource('beranda_img1', Beranda_img1Controller::class);
    Route::resource('beranda_img2', Beranda_img2Controller::class);
    Route::resource('f_profil', F_profilController::class);
    Route::resource('strorg', StrorgController::class);
    Route::resource('prodi', ProdiController::class);
    Route::resource('asesor', AsesorController::class);
    Route::resource('tuk', TukController::class);
    Route::resource('unikom', UnikomController::class);
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('asesion', function () {
        return view('asesion');
    });

    Route::resource('asesi', AsesiController::class);
    Route::resource('registrasi', RegistrasiController::class);
    Route::resource('xnxx', XnxxController::class);
    Route::post('xnxx2', [XnxxController::class, 'store2'])->name('xnxx.store2');

    Route::post('for_apl2', [XnxxController::class, 'token_store'])->name('token.store');
    Route::post('Registrasi_Validate', [XnxxController::class, 'token2_store'])->name('token2.store');
    Route::get('rekap_registrasi', [XnxxController::class, 'rekap_registrasi'])->name('rekap.registrasi');
    Route::delete('register/{register}', [XnxxController::class, 'destroy2'])->name('register.destroy');
});

Route::resource('post', PostController::class);

Route::get('asesion', [App\Http\Controllers\HomeController::class, 'index3'])->name('asesion');
Route::middleware('role:admin')->get('backend', [App\Http\Controllers\HomeController::class, 'index2'])->name('backend');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('edit', [AsesiController::class, 'edit'])->name('profil.edit');
Route::put('update', [AsesiController::class, 'update'])->name('profil.update');

Route::get('skema1', [HomeController::class, 'skema1'])->name('skema1');
Route::get('list', [HomeController::class, 'list'])->name('list');

Route::get('ujicoba', function () {
    return view('ujicoba');
});
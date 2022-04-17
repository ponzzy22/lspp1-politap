<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\AsesorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Dashboard_asesiController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DeleteGaleriFotoController;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\StrorgController;
use App\Http\Controllers\TolakController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\UnikomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\XnxxController;
use App\Models\Galeri_foto;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

///////////  FRONT END /////////////
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


Route::group(['middleware' => 'role:admin'], function () {
    ///////////  BACKEND END /////////////
    Route::resource('backend', DashboardAdminController::class);
    /////////// SKEMA  /////////////
    Route::resource('skema', SkemaController::class);
    Route::get('show_asesmen/{id}', [SkemaController::class, 'show_asesmen'])->name('show_asesmen');
    Route::get('detail/{id}', [SkemaController::class, 'detail'])->name('skema.detail');
    /////////// LAYANAN  /////////////
    Route::resource('prodi', ProdiController::class);
    Route::resource('asesor', AsesorController::class);
    Route::resource('tuk', TukController::class);
    Route::resource('unikom', UnikomController::class);
    Route::resource('asesmen', AsesmenController::class);
    /////////// PENGGUNA  /////////////
    Route::resource('user', UserController::class);
    /////////// DATA PESERTA  /////////////
    Route::resource('validasi', ValidasiController::class);
    Route::get('validasi2/{validasi}/edit', [ValidasiController::class, 'index_edit'])->name('validasi.edit2');
    Route::resource('tolak', TolakController::class);
    /////////// GALERI  /////////////
    Route::resource('galeri', GaleriController::class);
    Route::resource('delete_galeri_foto', DeleteGaleriFotoController::class);
    Route::post('upload_foto', [GaleriController::class, 'foto_store'])->name('foto.store');
    /////////// BERITA  /////////////
    Route::resource('berita', BeritaController::class);


    Route::resource('sett-beranda', UiController::class);
    Route::resource('beranda_img1', Beranda_img1Controller::class);
    Route::resource('beranda_img2', Beranda_img2Controller::class);
    Route::resource('f_profil', F_profilController::class);
    Route::resource('strorg', StrorgController::class);
    Route::post('upload', [GaleriController::class, 'upload'])->name('upload');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashasesi', Dashboard_asesiController::class);
    Route::resource('asesi', AsesiController::class);
    Route::resource('registrasi', RegistrasiController::class);
    Route::resource('xnxx', XnxxController::class);
    Route::post('xnxx2', [XnxxController::class, 'store2'])->name('xnxx.store2');
    /////////// ASSESMENT  /////////////
    Route::get('info_skema', [AsesiController::class, 'info_skema'])->name('info.skema');
    Route::get('info_skema/show/{id}', [AsesiController::class, 'info_skema_show'])->name('info_skema.show');
    Route::get('koleksi_sertifikat', [AsesiController::class, 'koleksi_sertifikat'])->name('koleksi.sertifikat');
    Route::get('instruksi_registrasi', [AsesiController::class, 'instruksi_registrasi'])->name('instruksi.registrasi');
    /////////// XNXX  /////////////    
    Route::post('for_apl2', [XnxxController::class, 'token_store'])->name('token.store');
    Route::post('Registrasi_Validate', [XnxxController::class, 'token2_store'])->name('token2.store');
    Route::get('rekap_registrasi', [XnxxController::class, 'rekap_registrasi'])->name('rekap.registrasi');
    Route::delete('register/{register}', [XnxxController::class, 'destroy2'])->name('register.destroy');
    Route::post('Identitas_upload_ada', [XnxxController::class, 'upload_identitas_store'])->name('identitas.store');
    Route::post('Identitas_upload_tidak_ada', [XnxxController::class, 'upload_identitas_store2'])->name('identitas.store2');
    Route::delete('identitas/{identitas}', [XnxxController::class, 'destroy3'])->name('identitas.destroy');
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

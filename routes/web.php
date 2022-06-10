<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesmenController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda_img1Controller;
use App\Http\Controllers\Beranda_img2Controller;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Dashboard_adminController;
use App\Http\Controllers\Dashboard_asesiController;
use App\Http\Controllers\DeleteGaleriFotoController;
use App\Http\Controllers\F_profilController;
use App\Http\Controllers\Fileapl2Controller;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FilelainController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KkniController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ReadAPL2Controller;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\SkkniController;
use App\Http\Controllers\StrorgController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\UiFotosController;
use App\Http\Controllers\UnikomController;
use App\Http\Controllers\Upload_DokumenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\XnxxController;
use App\Models\Fileapl2;
use App\Models\Galeri_foto;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

///////////  FRONT END /////////////
// Route::get('/', function () {
//     return view('beranda');
// });
Route::get('profil', function () {
    return view('front/profil');
});
Route::get('strorg1', function () {
    return view('front/strorg');
});
Route::get('404', function () {
    return view('404');
});
Route::get('loginadmin', function () {
    return view('auth/loginadmin');
});

///////////  CLIENT END /////////////
Route::get('/', [ClientController::class, 'clientutama'])->name('/');
Route::get('tentang', [ClientController::class, 'tentang'])->name('tentang');
Route::get('tutorial', [ClientController::class, 'tutorial'])->name('tutorial');
Route::get('logo', [ClientController::class, 'logo'])->name('logo');
Route::get('pengelola', [ClientController::class, 'pengelola'])->name('pengelola');
Route::get('pengelola_detail/{pengelola_detail}', [ClientController::class, 'pengelola_detail'])->name('pengelola_detail');
Route::get('struktur', [ClientController::class, 'struktur'])->name('struktur');
Route::get('visi', [ClientController::class, 'visi'])->name('visi');
Route::get('download', [ClientController::class, 'download'])->name('download');
Route::get('client_skkni', [ClientController::class, 'skkni'])->name('client_skkni');
Route::get('client_kkni', [ClientController::class, 'kkni'])->name('client_kkni');
Route::get('client_filelain', [ClientController::class, 'filelain'])->name('client_filelain');
Route::get('clien_fileapl2', [ClientController::class, 'fileapl2'])->name('clien_fileapl2');
Route::get('client_skema', [ClientController::class, 'skema'])->name('client_skema');
Route::get('skema_detail/{skema_detail}', [ClientController::class, 'skema_detail'])->name('skema_detail');
Route::get('client_tuk', [ClientController::class, 'tuk'])->name('client_tuk');
Route::get('tuk_detail/{tuk_detail}', [ClientController::class, 'tuk_detail'])->name('tuk_detail');
Route::get('client_sertifikat', [ClientController::class, 'sertifikat'])->name('client_sertifikat');
Route::get('client_asesor', [ClientController::class, 'asesor'])->name('client_asesor');
Route::get('asesor_detail/{asesor_detail}', [ClientController::class, 'asesor_detail'])->name('asesor_detail');
Route::get('client_berita', [ClientController::class, 'berita'])->name('client_berita');
Route::get('berita_detail/{berita_detail}', [ClientController::class, 'berita_detail'])->name('berita_detail');
Route::get('client_galeri', [ClientController::class, 'galeri'])->name('client_galeri');
Route::get('galeri_detail/{galeri_detail}', [ClientController::class, 'galeri_detail'])->name('galeri_detail');

Route::get('/exportPDF', [ValidasiController::class, 'generatepdf'])->name('pdf');

Route::get('/3', [UiController::class, 'ui_beranda'])->name('beranda');
Route::get('/2', [UiController::class, 'ui_beranda2']);
Route::get('profil', [UiController::class, 'profil'])->name('profil.front');
Route::get('show_artikel_berita', [UiController::class, 'berita_list'])->name('berita.list');
Route::get('show_pengumuman', [UiController::class, 'pengumuman_list'])->name('pengumuman.list');
Route::get('uiskemas/{uiskema}', [UiController::class, 'uiskema_show'])->name('uiskema.show');
Route::get('tampil_skema', [UiController::class, 'tampil_skema'])->name('tampil.skema');
Route::get('berita_tampil/{berita_tampil}', [UiController::class, 'berita_tampil'])->name('berita.tampil');
Route::get('file_download', [UiController::class, 'file'])->name('file.tampil');
Route::resource('uifoto', UiFotosController::class);

Auth::routes();


Route::group(['middleware' => 'role:admin'], function () {
    ///////////  DASHBOARD  /////////////
    Route::resource('admin', Dashboard_adminController::class);
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
    /////////// DATA REGISTRASI  /////////////
    Route::resource('validasi', ValidasiController::class);
    Route::get('validasi2/{validasi}/edit', [ValidasiController::class, 'index_edit'])->name('validasi.edit2');
    Route::get('registrasi_baru', [ValidasiController::class, 'registrasi_baru'])->name('registrasi.baru');
    Route::get('pengguna_ditolak', [ValidasiController::class, 'list_tolak'])->name('list.tolak');
    Route::get('pengguna_divalidasi', [ValidasiController::class, 'list_valid'])->name('list.valid');
    Route::get('pengguna_bersertifikat', [ValidasiController::class, 'list_sertifikat'])->name('list.sertifikat');
    Route::put('finish/{finish}', [ValidasiController::class, 'update2'])->name('finish.update');
    Route::put('tolak/{tolak}', [ValidasiController::class, 'update3'])->name('tolak.update');
    Route::put('koreksiformulir_update/{koreksiformulir_update}', [ValidasiController::class, 'koreksiformulir_update'])->name('koreksiformulir_update.update');
    Route::put('koreksiformulirapl2_update/{koreksiformulirapl2_update}', [ValidasiController::class, 'koreksiformulirapl2_update'])->name('koreksiformulirapl2_update');
    Route::get('koreksiformulir/{id}', [ValidasiController::class, 'koreksiformulir'])->name('koreksiformulir');
    Route::resource('readapl2', ReadAPL2Controller::class);
    /////////// GALERI  /////////////
    Route::resource('galeri', GaleriController::class);
    Route::resource('dashadmin', Dashboard_adminController::class);
    Route::resource('delete_galeri_foto', DeleteGaleriFotoController::class);
    Route::post('upload_foto', [GaleriController::class, 'foto_store'])->name('foto.store');
    /////////// BERITA  /////////////
    Route::resource('berita', BeritaController::class);
    Route::resource('info', InfoController::class);
    Route::put('save_image/{save_image}', [InfoController::class, 'save_image'])->name('save_image');
    /////////// FILE UPLOAD  /////////////
    Route::resource('file', FileController::class);
    Route::resource('skkni', SkkniController::class);
    Route::get('skkni_detail/{skkni_detail}', [SkkniController::class, 'skkni_detail'])->name('skkni_detail');
    Route::resource('kkni', KkniController::class);
    Route::get('kkni_detail/{kkni_detail}', [kkniController::class, 'kkni_detail'])->name('kkni_detail');
    Route::resource('fileapl2', Fileapl2Controller::class);
    Route::get('fileapl2_detail/{fileapl2_detail}', [Fileapl2Controller::class, 'fileapl2_detail'])->name('fileapl2_detail');
    Route::resource('filelain', FilelainController::class);
    Route::get('filelain_detail/{filelain_detail}', [FilelainController::class, 'filelain_detail'])->name('filelain_detail');
     /////////// NOTE  /////////////
    Route::resource('note', NoteController::class);
     /////////// FRONT SETTING  /////////////
    Route::resource('sett-beranda', UiController::class);
    Route::resource('beranda_img1', Beranda_img1Controller::class);
    Route::resource('beranda_img2', Beranda_img2Controller::class);
    Route::resource('f_profil', F_profilController::class);
    Route::resource('strorg', StrorgController::class);
    Route::post('upload', [GaleriController::class, 'upload'])->name('upload');
    Route::post('finishstore', [ValidasiController::class, 'finishstore'])->name('finishstore');
});

Route::group(['middleware' => 'auth'], function () {
     /////////// REGISTER  /////////////
    Route::resource('dashasesi', Dashboard_asesiController::class);
    Route::resource('asesi', AsesiController::class);
    Route::resource('registrasi', RegistrasiController::class);
    Route::resource('pendaftaran', XnxxController::class);
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
    Route::resource('identitas', Upload_DokumenController::class);

    Route::get('edit', [AsesiController::class, 'edit'])->name('profil.edit');
    Route::put('update', [AsesiController::class, 'update'])->name('profil.update');

    Route::get('formulirapl2_edit', [AsesiController::class, 'formulirapl2_edit'])->name('formulirapl2.edit');
    Route::put('formulirapl2_update', [AsesiController::class, 'formulirapl2_update'])->name('formulirapl2.update');

    Route::get('formulirapl2edit/{id}', [RegistrasiController::class, 'formulirapl2edit'])->name('formulirapl2edit');

    Route::get('sertifikat_show/{id}', [AsesiController::class, 'sertifikat_show'])->name('sertifikat_show');
    Route::get('rekap_pendaftaran/{id}', [RegistrasiController::class, 'rekap_pendaftaran'])->name('rekap_pendaftaran');
    Route::get('info_sertifikasi/{id}', [RegistrasiController::class, 'info_sertifikasi'])->name('info_sertifikasi');
    Route::get('data_edit_tolak/{id}', [RegistrasiController::class, 'data_edit_tolak'])->name('data_edit_tolak');
    Route::get('formulirapl2edit_tolak/{id}', [RegistrasiController::class, 'formulirapl2edit_tolak'])->name('formulirapl2edit_tolak');

});

Route::resource('post', PostController::class);

Route::get('asesion', [App\Http\Controllers\HomeController::class, 'index3'])->name('asesion');
Route::middleware('role:admin')->get('admin', [App\Http\Controllers\Dashboard_adminController::class, 'index'])->name('admin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('edit', [AsesiController::class, 'edit'])->name('profil.edit');
Route::put('update', [AsesiController::class, 'update'])->name('profil.update');

Route::get('skema1', [HomeController::class, 'skema1'])->name('skema1');
Route::get('list', [HomeController::class, 'list'])->name('list');

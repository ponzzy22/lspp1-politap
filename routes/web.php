<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UiController;
use App\Models\Beranda;

Route::get('/', function () {
    return view('beranda');
});
Route::get('admin', function () {
    return view('dashboard');
});

Route::resource('sett-beranda', UiController::class);
Route::get('/', [UiController::class, 'judul_deskripsi']);

// Route::get('sett-beranda/index', [BerandaController::class, 'index']);
// Route::get('sett-beranda/create', [BerandaController::class, 'create']);
// Route::post('sett-beranda/store', [BerandaController::class, 'store']);
// Route::get('sett-beranda/edit/{id}', [BerandaController::class, 'edit']);
// Route::put('sett-beranda/update', [BerandaController::class, 'update']);


// Route::resources('test123', [UiController::class]);
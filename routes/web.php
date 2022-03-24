<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('klien', function () {
    return view('beranda');
});

Route::get('admin', function () {
    return view('dashboard');
});

Route::get('layout1', function () {
    return view('layout/1');
});

Route::get('layout2', function () {
    return view('layout/2');
});

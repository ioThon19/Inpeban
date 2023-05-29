<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/selesai', function () {
    return view('selesai');
});

Route::get('/proses', function () {
    return view('proses');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ditolak', function () {
    return view('ditolak');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/daftar', function () {
    return view('daftar');
});
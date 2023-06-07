<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;

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
    return view('beranda');
})->name('beranda');

Route::get('daftar', [UserController::class, 'daftar'])->name('daftar');
Route::post('daftar', [UserController::class, 'daftar_action'])->name('daftar.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin');
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

Route::get('/ditolak', function () {
    return view('ditolak');
});

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/daftar', function () {
//     return view('daftar');
// });


<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AduanController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


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
})->name('beranda');

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/landing', [UserController::class, 'index'])->name('inpeban.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('inpeban.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('inpeban.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('inpeban.register');

Route::post('/store', [UserController::class, 'storeAduan'])->name('inpeban.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('inpeban.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('inpeban.logout');

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'formLogin'])->name('admin.formLogin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('aduan', AduanController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('masyarakat', MasyarakatController::class);
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');

    Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');

});

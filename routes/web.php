<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/jadwal', [App\Http\Controllers\HomeController::class, 'jadwal'])->name('jadwal');
Route::get('/prosedur', [App\Http\Controllers\HomeController::class, 'prosedur'])->name('prosedur');
Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success'])->name('success');
// Pendaftaran
Route::get('/pendaftaran', [App\Http\Controllers\HomeController::class, 'pendaftar'])->name('pendaftar');
Route::post('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/cetak-data', [App\Http\Controllers\PendaftaranController::class, 'cetakData'])->name('cetak.data');
// Data User
Route::get('/user', [App\Http\Controllers\DashboardController::class, 'user'])->name('user');
Route::get('/cetak-data-user', [App\Http\Controllers\DashboardController::class, 'cetakData'])->name('cetak.data.user');

// Data Pendaftar
Route::get('/pendaftar', [App\Http\Controllers\DashboardController::class, 'pendaftar'])->name('data.pendaftar');
Route::get('/verifikasi/{id}', [DashboardController::class, 'ubahStatusVerifikasi'])->name('verifikasi.ubah');

Route::get('/pengumuman', [App\Http\Controllers\HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin');


<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\MendaftarController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PengumpulanController;
use App\Http\Controllers\PengumpulandepanController;

// Route awal
Route::get('/', function () {
    return view('content.index');
})->name('beranda');

Route::get('/register', function () {
  abort(403, 'Pendaftaran sudah ditutup.');
})->name('daftar');

Route::get('/about', function () {
    return view('content.about');
})->name('about');

Route::get('/competition', function () {
    return view('content.halamanDaftarAwal');
})->name('competition');

Route::redirect('home', 'dashboard');

Route::get('/auth',  [authController::class, "index"])->name('login');
Route::get('/auth/redirect',  [authController::class, "redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::get('/auth/logout', [authController::class, "logout"]);

// Dashboard routes (yang perlu login)
Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {

    Route::get('/', [PendaftarController::class, 'index'])->name('index');
    Route::resource('halaman', halamanController::class);
    Route::resource('pendaftar', PendaftarController::class)->except('show');
    Route::get('/pendaftar/export', [App\Http\Controllers\PendaftarController::class, 'export'])->name('pendaftar.export');
});

//Route::post('/terdaftar', [MendaftarController::class, 'store'])->name('mendaftar.store');
Route::get('/pengumpulan', function () {
  abort(403, 'Pengumpulan sudah ditutup.');
})->name('pengumpulan');

Route::resource('/dashboard/pengumpulan', PengumpulanController::class, [
    'as' => 'dashboard'
])->except(['show']);

Route::get('/dashboard/pengumpulan/export', [PengumpulanController::class, 'export'])->name('dashboard.pengumpulan.export');


Route::post('/pengumpulan', [PengumpulandepanController::class, 'store'])->name('pengumpulandepan');

Route::get('/pengumuman', function () {
    return view('content.pengumuman');
})->name('pengumuman');

Route::get('/pengumuman2', function () {
    return view('content.pengumuman2');
})->name('pengumuman2');


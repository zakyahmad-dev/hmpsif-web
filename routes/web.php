<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus.index');
Route::get('/program', [ProgramKerjaController::class, 'index'])->name('program.index');
Route::get('/program/{id}', [ProgramKerjaController::class, 'show'])->name('program.show');
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/gabung', [PendaftaranController::class, 'create'])->name('gabung.create');
Route::post('/gabung', [PendaftaranController::class, 'store'])->name('gabung.store');

Route::get('/kontak', [KontakController::class, 'create'])->name('kontak.create');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/about', 'about')->name('about');
<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;

Route::middleware('apikey')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index']);          // Ambil semua siswa
    Route::post('/siswa', [SiswaController::class, 'store']);         // Tambah siswa baru
    Route::get('/siswa/{id}', [SiswaController::class, 'show']);      // Lihat detail siswa
    Route::put('/siswa/{id}', [SiswaController::class, 'update']);    // Update data siswa
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']); // Hapus siswa
});

Route::middleware('apikey')->group(function () {
    Route::get('/absensi', [AbsensiController::class, 'index']);
    Route::post('/absensi', [AbsensiController::class, 'store']);
    Route::get('/absensi/{id}', [AbsensiController::class, 'show']);
    Route::put('/absensi/{id}', [AbsensiController::class, 'update']);
    Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Livewire\Livewire;

/* NOTE: Do Not Remove - Livewire asset handling if using sub folder in domain */
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/* END */

// ✅ Ini satu-satunya route untuk halaman utama
Route::get('/', function () {
    $siswaList = Siswa::latest()->take(6)->get();
    return view('pages.home', compact('siswaList'));
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

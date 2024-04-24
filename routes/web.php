<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa');
Route::post('/data-mahasiswa-simpan', [App\Http\Controllers\MahasiswaController::class, 'simpan'])->name('data-mahasiswa-simpan');

Route::controller(App\Http\Controllers\JadwalMatakuliahController::class)->group(function () {
    Route::get('/jadwal-matakuliah', 'index')->name('jadwal-matakuliah');
    Route::post('/jadwal-matakuliah', 'store')->name('jadwal-matakuliah');
    Route::put('/jadwal-matakuliah/{id}', 'update')->name('edit-jadwal-matakuliah');
    Route::delete('/jadwal-matakuliah/{id}', 'destroy')->name('delete-jadwal-matakuliah');
});
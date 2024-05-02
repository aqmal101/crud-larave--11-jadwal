<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/data-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('data-mahasiswa');
Route::post('/data-mahasiswa-simpan', [App\Http\Controllers\MahasiswaController::class, 'simpan'])->name('data-mahasiswa-simpan');
Route::put('/data-mahasiswa-edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('data-mahasiswa-edit');
Route::delete('/data-mahasiswa-hapus/{id}', [App\Http\Controllers\MahasiswaController::class, 'hapus'])->name('data-mahasiswa-hapus');

Route::controller(App\Http\Controllers\JadwalMatakuliahController::class)->group(function () {
    Route::get('/jadwal-matakuliah', 'index')->name('jadwal-matakuliah');
    Route::post('/jadwal-matakuliah', 'store')->name('jadwal-matakuliah');
    Route::put('/jadwal-matakuliah/{id}', 'update')->name('edit-jadwal-matakuliah');
    Route::delete('/jadwal-matakuliah/{id}', 'destroy')->name('delete-jadwal-matakuliah');
});

Route::get('/prodi', [App\Http\Controllers\ProdiController::class, 'index'])->name('prodi');
Route::post('/prodi-simpan', [App\Http\Controllers\ProdiController::class, 'simpan'])->name('prodi-simpan');
Route::put('/prodi-edit/{id}', [App\Http\Controllers\ProdiController::class, 'edit'])->name('prodi-edit');
Route::delete('/prodi-hapus/{id}', [App\Http\Controllers\ProdiController::class, 'hapus'])->name('prodi-hapus');

// Route::controller(App\Http\Controllers\PembayaranController::class)->group(function () {
//     Route::get('/pembayaran', 'index')->name('pembayaran');
//     Route::post('/pembayaran-simpan', 'simpan')->name('pembayaran');
//     Route::put('/pembayaran-edit/{id}', 'edit')->name('pembayaran-edit');
//     Route::delete('/pembayaran-hapus/{id}', 'hapus')->name('pembayaran-hapus');
//     Route::post('/pembayaran-import', 'import_excel')->name('pembayaran-import');
// });

Route::controller(App\Http\Controllers\PembayaranController::class)->group(function () {
    Route::get('/pembayaran', 'index')->name('pembayaran');
    Route::post('/pembayaran-simpan', 'simpan')->name('pembayaran');
    Route::delete('/pembayaran-hapus/{id}', 'hapus')->name('pembayaran-hapus');
});
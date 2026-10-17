<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporBanjirController; // Atau DataController jika pakai nama itu

Route::get('/', function () {
    return redirect()->route('students.index');
});

// Route Materi Praktikum Students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route Tugas Praktikum LaporBanjir
Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');
Route::get('/laporan-daftar', [LaporBanjirController::class, 'index'])->name('lapor.index');

use App\Http\Controllers\LaporanController;

// Route untuk Form LaporBanjir
Route::get('/form-laporan', [LaporanController::class, 'form']);
Route::post('/simpan-laporan', [LaporanController::class, 'simpan']);
Route::get('/daftar-laporan', [LaporanController::class, 'daftar']);





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporBanjirController;

// Redirect Halaman Utama ke Students
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Route Praktikum Students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route LaporBanjir
Route::get('/lapor', [LaporBanjirController::class, 'form'])->name('laporbanjir.form');
Route::post('/lapor', [LaporBanjirController::class, 'simpan'])->name('laporbanjir.store');
Route::get('/daftar-laporan', [LaporBanjirController::class, 'daftar'])->name('laporbanjir.index');
<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;


Route::get('/equipments', [EquipmentController::class, 'index'])->name('Katalog berpaginasi, pencarian & filter');
Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('Tampilan formulir tambah aset');
Route::post('/equipments', [EquipmentController::class, 'store'])->name('Validasi, upload foto, penyimpanan aset');
Route::get('/equipments/{id}', [EquipmentController::class, 'show'])->name('Detail spesifikasi & ketersediaan aset');


Route::get('/loans/create', [LoanController::class, 'create'])->name('Formulir pengajuan peminjaman aset');
Route::post('/loans', [LoanController::class, 'store'])->name('Validasi aturan bisnis & transaksi peminjaman');

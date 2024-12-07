<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProsesPengajuanController;
use App\Http\Controllers\PerjalananDinasController;
use App\Http\Controllers\PengajuanCutiController;
use App\Http\Controllers\PengajuanCutiKomentarController;
use App\Http\Controllers\SekretarisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| that contains the "web" middleware group.
|
*/

// Routes for public pages
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/nextirigasi', [HomeController::class, 'nextirigasi']);
Route::get('/nextrawa', [HomeController::class, 'nextrawa']);
Route::get('/nextsungai', [HomeController::class, 'nextsungai']);
Route::get('/nextdanau', [HomeController::class, 'nextdanau']);
Route::get('/nextsumurbor', [HomeController::class, 'nextsumurbor']);
Route::get('/psdalainnya', [HomeController::class, 'psdalainnya']);
Route::get('/layananpsda', [HomeController::class, 'layanankami']);
Route::get('/kopsurat', [HomeController::class, 'kopsurat'])->name('home.kopsurat');

// Authentication routes
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authanticate'])->name('authanticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth.pegawai');

// Routes for Pengajuan
Route::middleware(['auth.pegawai'])->group(function () {
    Route::get('/pengajuan/proses', [ProsesPengajuanController::class, 'index'])->name('proses-pengajuan.index');
    Route::post('/pengajuan/proses/{id}', [PengajuanController::class, 'proses'])->name('pengajuan.proses');
    Route::put('/pengajuan/{id}/update-status', [ProsesPengajuanController::class, 'updateStatus'])->name('pengajuan.updateStatus');
    Route::get('/pengajuan/preview/{id}', [PengajuanCutiController::class, 'previewSurat'])->name('pengajuan.preview');
    Route::get('/pengajuan/{id}/preview', [PengajuanController::class, 'previewPdf'])->name('pengajuans.preview');
});

// Routes for Proses Sekretaris
Route::middleware(['auth.pegawai'])->prefix('proses-sekretaris')->group(function () {
    Route::get('/', [SekretarisController::class, 'index'])->name('proses-sekretaris.index');
    Route::put('/update-status/{id}', [SekretarisController::class, 'updateStatus'])->name('proses-sekretaris.updateStatus');
});

// Routes for Pengajuan Cuti
Route::middleware(['auth.pegawai'])->prefix('pengajuan-cuti')->group(function () {
    Route::get('/riwayat', [PengajuanCutiController::class, 'index'])->name('pengajuan-cuti.index');
    Route::get('/create', [PengajuanCutiController::class, 'create'])->name('pengajuan-cuti.create');
    Route::post('/store', [PengajuanCutiController::class, 'store'])->name('pengajuan-cuti.store');
    Route::get('/{id}', [PengajuanCutiController::class, 'show'])->name('pengajuan-cuti.show');
    Route::get('/{id}/edit', [PengajuanCutiController::class, 'edit'])->name('pengajuan-cuti.edit');
    Route::put('/{id}', [PengajuanCutiController::class, 'update'])->name('pengajuan-cuti.update');
    Route::delete('/{id}', [PengajuanCutiController::class, 'destroy'])->name('pengajuan-cuti.destroy');
    Route::get('/export-pdf/{id}', [PengajuanCutiController::class, 'exportPdf'])->name('pengajuan-cuti.export-pdf');
});

// Routes for Pengajuan Cuti Komentar
Route::middleware(['auth.pegawai'])->prefix('pengajuan/cuti/proses')->group(function () {
    Route::get('/', [PengajuanCutiKomentarController::class, 'index'])->name('pengajuan-cutiproses.index');
    Route::post('/{id}', [PengajuanCutiKomentarController::class, 'proses'])->name('pengajuan-cutiproses.proses');
    Route::put('/update-status/{id}', [PengajuanCutiKomentarController::class, 'updateStatus'])->name('pengajuan-cutiproses.updateStatus');
});

// Routes for Perjalanan Dinas
Route::middleware(['auth.pegawai'])->prefix('perjalanan-dinas')->group(function () {
    Route::get('/riwayat', [PengajuanController::class, 'index'])->name('perjalanan-dinas.index');
    Route::get('/create', [PengajuanController::class, 'create'])->name('perjalanan-dinas.create');
    Route::post('/store', [PengajuanController::class, 'store'])->name('perjalanan-dinas.store');
    Route::get('/{id}', [PengajuanController::class, 'show'])->name('perjalanan-dinas.show');
    Route::get('/{id}/edit', [PengajuanController::class, 'edit'])->name('perjalanan-dinas.edit');
    Route::put('/{id}', [PengajuanController::class, 'update'])->name('perjalanan-dinas.update');
    Route::delete('/{id}', [PengajuanController::class, 'destroy'])->name('perjalanan-dinas.destroy');
    Route::get('/pengajuan/{id}/export-pdf', [PengajuanController::class, 'exportPdf'])->name('pengajuan.export-pdf');
});

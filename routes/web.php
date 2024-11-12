<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProsesPengajuanController;
use App\Http\Controllers\PerjalananDinasController;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/nextirigasi', [HomeController::class, 'nextirigasi']);
Route::get('/nextrawa', [HomeController::class, 'nextrawa']);
Route::get('/nextsungai', [HomeController::class, 'nextsungai']);
Route::get('/nextdanau', [HomeController::class, 'nextdanau']);
Route::get('/nextsumurbor', [HomeController::class, 'nextsumurbor']);
Route::get('/psdalainnya', [HomeController::class, 'psdalainnya']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authanticate'])->name('authanticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth.pegawai');
// Route::resource('nota-dinas', PerjalananDinasController::class)->middleware('auth.pegawai');
Route::get('/pengajuan/proses', [ProsesPengajuanController::class, 'index'])
    ->name('proses-pengajuan.index')
    ->middleware(['auth.pegawai']); // Batasi akses hanya untuk divisi tertentu
Route::post('/pengajuan/proses/{id}', [PengajuanController::class, 'proses'])->name('pengajuan.proses');
Route::put('/pengajuan/{id}/update-status', [ProsesPengajuanController::class, 'updateStatus'])->name('pengajuan.updateStatus');



Route::group(['prefix' => 'perjalanan-dinas', 'middleware' => 'auth.pegawai'], function () {

    Route::get('/riwayat', [PengajuanController::class, 'index'])->name('perjalanan-dinas.index');
    Route::get('/create', [PengajuanController::class, 'create'])->name('perjalanan-dinas.create');
    Route::post('/perjalan-dinas/store', [PengajuanController::class, 'store'])->name('perjalanan-dinas.store');
    Route::get('/{id}', [PengajuanController::class,'show'])->name('perjalanan-dinas.show');
    Route::get('/{id}/edit', [PengajuanController::class, 'edit'])->name('perjalanan-dinas.edit');
    Route::put('/{id}', [PengajuanController::class, 'update'])->name('perjalanan-dinas.update');
    Route::delete('/{id}', [PengajuanController::class, 'destroy'])->name('perjalanan-dinas.destroy');
    Route::get('/pengajuan/{id}/export-pdf', [PengajuanController::class, 'exportPdf'])->name('pengajuan.export-pdf');
});

Route::get('/layananpsda', [HomeController::class, 'layanankami'])->name('home.layananpsda.layanankami');



// Route::resource('pengajuans', PengajuanController::class)->middleware('auth.pegawai');

// Route::middleware(['auth.pegawai', 'auth.pegawai'])->group(function () {
//     Route::get('pengajuans', [PengajuanController::class, 'index'])->name('pengajuans.index');
//     Route::get('pengajuans/create', [PengajuanController::class, 'create'])->name('pengajuans.create');
//     // Route::post('pengajuans', [PengajuanController::class, 'store'])->name('pengajuans.store');
// });

// Route::post('pengajuans', [PengajuanController::class, 'store'])->name('pengajuans.store');

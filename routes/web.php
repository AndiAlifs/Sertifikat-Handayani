<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\KompetensiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function(){
    Route::get('/', [SertifikatController::class, 'index'])->name('sertif.index');

    Route::get('/sertifikat/buat', [SertifikatController::class, 'create'])->name('sertif.buat');
    Route::post('/sertifikat/simpan', [SertifikatController::class, 'store'])->name('nilai.simpan');
    Route::get('/sertifikat/detail/{id}', [SertifikatController::class, 'show'])->name('sertif.detail');
    Route::get('/sertifikat/edit/{id}', [SertifikatController::class, 'edit'])->name('sertif.edit');
    Route::get('/sertifikat/hapus/{id}', [SertifikatController::class, 'delete'])->name('sertif.hapus');
    
    Route::post('/nilai/buat', [NilaiController::class, 'create'])->name('nilai.buat');
    
    Route::get('/kursus/buat', [KursusController::class, 'create'])->name('kursus.buat');
    Route::post('/kursus/simpan', [KursusController::class, 'store'])->name('kursus.simpan');
    Route::post('/kursus/update', [KursusController::class, 'update'])->name('kursus.update');
    Route::get('/kursus/hapus/{id}', [KursusController::class, 'destroy'])->name('kursus.hapus');

    
    Route::get('/kompetensi/buat', [KompetensiController::class, 'create'])->name('kompetensi.buat');
    Route::get('/kompetensi/list/{id}', [KompetensiController::class, 'index'])->name('kompetensi.detail');
    Route::get('/kompetensi/hapus/{id}', [KompetensiController::class, 'destroy'])->name('kompetensi.hapus');
    Route::post('/kompetensi/simpan', [KompetensiController::class, 'store'])->name('kompetensi.simpan');    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

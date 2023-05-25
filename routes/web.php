<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\OrangTuaController;
use App\Http\Controllers\Admin\PerkembanganController as AdminPerkembanganController;
use App\Http\Controllers\Admin\PrestasiAkademikController;
use App\Http\Controllers\Admin\PrestasiNonAkademikController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrangTua\PerkembanganController;
use App\Http\Controllers\OrangTua\ProfileController as OrangTuaProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Siswa\NilaiRaporController;
use App\Http\Controllers\Siswa\ProfileController as SiswaProfileController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::resource('data-admin', AdminController::class)->middleware('role:Admin');
    Route::resource('data-orang-tua', OrangTuaController::class)->middleware('role:Admin');
    Route::resource('data-siswa', SiswaController::class)->middleware('role:Admin');
    Route::resource('prestasi-akademik', PrestasiAkademikController::class)->middleware('role:Admin');
    Route::resource('prestasi-non-akademik', PrestasiNonAkademikController::class)->middleware('role:Admin');
    Route::resource('data-siswa', SiswaController::class)->middleware('role:Admin');
    Route::resource('data-nilai-rapor', NilaiRaporController::class)->middleware('role:Siswa');
    Route::put('/siswa/update-profile', [SiswaProfileController::class, 'update'])->name('siswa.update-profile')->middleware('role:Siswa');
    Route::put('/orang-tua/update-profile', [OrangTuaProfileController::class, 'update'])->name('orang-tua.update-profile')->middleware('role:Orang Tua');
    Route::get('/admin-perkembangan-siswa', [AdminPerkembanganController::class, 'index'])->name('admin-perkembangan.index')->middleware('role:Admin');
    Route::get('/perkembangan-siswa', [PerkembanganController::class, 'index'])->name('perkembangan.index')->middleware('role:Orang Tua');
    Route::get('/perkembangan-siswa/{nisn}', [PerkembanganController::class, 'rekapan'])->name('rekapan.show')->middleware('role:Orang Tua');
    Route::get('/perkembangan-siswa/{nisn}/cetak', [PerkembanganController::class, 'cetak'])->name('rekapan.cetak')->middleware('role:Orang Tua');
    Route::get('/perkembangan-siswa/{nisn}/cetak-excel', [PerkembanganController::class, 'cetak_excel'])->name('rekapan.cetak-excel')->middleware('role:Orang Tua');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index')->middleware('role:Admin');
    Route::get('/laporan/cetak-nilai-siswa', [LaporanController::class, 'cetak_siswa'])->name('laporan.cetak-siswa')->middleware('role:Admin');
    Route::get('/laporan/cetak-nilai-siswa-excel', [LaporanController::class, 'cetak_siswa_excel'])->name('laporan.cetak-siswa-excel')->middleware('role:Admin');
    Route::get('/laporan/cetak-semua-nilai-siswa', [LaporanController::class, 'cetak_semua'])->name('laporan.cetak-semua')->middleware('role:Admin');
    Route::get('/laporan/cetak-semua-nilai-siswa-excel', [LaporanController::class, 'cetak_semua_excel'])->name('laporan.cetak-semua-excel')->middleware('role:Admin');
    Route::get('/laporan/cetak-semua-nilai-siswa-jurusan', [LaporanController::class, 'cetak_jurusan'])->name('laporan.cetak-jurusan')->middleware('role:Admin');
    Route::get('/laporan/cetak-semua-nilai-siswa-jurusan-excel', [LaporanController::class, 'cetak_jurusan_excel'])->name('laporan.cetak-jurusan-excel')->middleware('role:Admin');
    Route::get('/laporan/cetak-data-siswa', [LaporanController::class, 'cetak_data_siswa'])->name('laporan.cetak-data-siswa')->middleware('role:Admin');
    Route::get('/laporan/cetak-data-siswa-excel', [LaporanController::class, 'cetak_data_siswa_excel'])->name('laporan.cetak-data-siswa-excel')->middleware('role:Admin');
    Route::get('/laporan/cetak-data-orang-tua', [LaporanController::class, 'cetak_data_orang_tua'])->name('laporan.cetak-data-orang-tua')->middleware('role:Admin');
    Route::get('/laporan/cetak-data-orang-tua-excel', [LaporanController::class, 'cetak_data_orang_tua_excel'])->name('laporan.cetak-data-orang-tua-excel')->middleware('role:Admin');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

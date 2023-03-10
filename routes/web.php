<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use App\Http\Controllers\user\PengembalianController;
use App\Http\Controllers\admin\DashboardController as AdminDashbordController;
use App\Http\Controllers\admin\PenerbitController as AdminPenerbitController;
use App\Http\Controllers\admin\PeminjamanController as AdminPeminjamanController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AnggotaController;
use App\Http\Controllers\PesanController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/peminjaman/riwayat', [PeminjamanController::class , 'riwayatPeminjaman'])->name('user.riwayat.peminjaman');
    Route::get('/form_peminjaman' , [PeminjamanController::class , 'indexForm'])->name('user.form.peminjaman');
    Route::post('/form_peminjaman' , [PeminjamanController::class , 'form']);
    Route::post('/peminjaman/submit' , [PeminjamanController::class , 'store'])->name('submit.peminjaman');
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('user.pengembalian');
    Route::get('/pengembalian/riwayat', [PengembalianController::class, 'riwayatPengembalian'])->name('user.riwayat.pengembalian');
    Route::post('/pengembalian/submit' , [PengembalianController::class , 'store'])->name('submit.pengembalian');
    Route::post('/pesan/kirim', [PesanController::class, 'kirimPesan'])->name('user.pesan.kirim');
    Route::get('/pesan/terkirim', [PesanController::class, 'indexTerkirim'])->name('user.pesan.terkirim');
    Route::post('/pesan/masuk/ubah_status', [PesanController::class, 'updateStatus'])->name('user.pesan.masuk.update');
    Route::get('/pesan/masuk', [PesanController::class, 'indexMasuk'])->name('user.pesan.masuk');
});

Route::prefix('/admin')->group(function(){
    Route::get('dashboard', [AdminDashbordController::class, 'index'])->name('admin.dashboard');
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.data');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.data');
    Route::get('/penerbit', [AdminPenerbitController::class, 'index'])->name('penerbit.data');
    Route::get('/peminjaman', [AdminPeminjamanController::class, 'index'])->name('peminjaman.data');
    Route::post('/admin/tambah', [AdminController::class, 'store'])->name('admin.tambah.data');
    Route::post('/anggota/tambah', [AnggotaController::class, 'store'])->name('anggota.tambah.data');
    
});

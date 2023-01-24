<?php

use App\Http\Controllers\user\PeminjamanController;
use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/peminjaman/riwayat', [PeminjamanController::class, 'riwayatPeminjaman'])->name('user.riwayat.peminjaman');
    Route::get('/form_peminjaman', [PeminjamanController::class, 'indexForm'])->name('user.form.peminjaman');
    Route::post('/form_peminjaman', [PeminjamanController::class, 'form']);
    Route::post('/peminjaman/submit', [PeminjamanController::class, 'store'])->name('submit.peminjaman');

    
});

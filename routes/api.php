<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API login
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//protecting routes
Route::group(['middleware' => ['auth::sanctum']], function(){
    Route::get('/profile', function(Request $request){
        return auth()->user();
    });

    //api route logout
    Route::post('/logout', [App\Http\Controller\API\AuthController::class, 'logout']);
});

Route::controller(App\Http\Controllers\API\ApiBukuController::class)->prefix('/buku')->group(function(){
    Route::get('/','index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controllers\API\ApiKategoriController::class)->prefix('/kategori')->group(function(){
    Route::get('/','index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controller\API\ApiPenerbitController::class)->prefix('/penerbit')->group(function(){
    Route::get('/','index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controller\API\ApiPeminjamanController::class)->prefix('/peminjaman')->group(function(){
    Route::get('/', 'index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controller\API\ApiPemberitahuanController::class)->prefix('/pemberitahuan')->group(function(){
    Route::get('/', 'index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controller\API\ApiPesanController::class)->prefix('/pesan')->group(function(){
    Route::get('/', 'index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

Route::controller(App\Http\Controller\API\ApiIdentitasController::class)->prefix('/pesan')->group(function(){
    Route::get('/', 'index');
    Route::post('/add','store');
    Route::put('/edit/{id}','update');
    Route::delete('/delete/{id}','destroy');
});

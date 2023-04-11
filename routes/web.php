<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/logout',[LoginController::class,'logout']);
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::resource('produk', ProdukController::class)->parameter('produk','id');
    Route::resource('karyawan', KaryawanController::class)->parameter('karyawan','id');
    Route::resource('pelanggan',PelangganController::class)->parameter('pelanggan','id');
    Route::resource('jadwal',JadwalController::class)->parameter('jadwal','id'); 
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


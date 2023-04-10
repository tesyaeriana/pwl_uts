<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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
    Route::get('/',[DashboardController::class, 'index']);
    Route::resource('produk', ProdukController::class)->parameter('produk','id');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


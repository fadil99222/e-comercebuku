<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuukuController;
use App\Http\Controllers\PesananController;

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


Route::get('/',  [BuukuController::class, 'index']);
Route::get('/novel',  [BuukuController::class, 'novel']);
Route::get('/computer',  [BuukuController::class, 'computer']);
Route::get('/manga',  [BuukuController::class, 'manga']);

Route::get('/admin',[BuukuController::class,'admin']);
Route::post('/pesanan/{slug}',[PesananController::class,'pesan']);
Route::get('/pembelian',[PesananController::class,'index']);
Route::get('/delete/{id}',[BuukuController::class,'delete']);
Route::get('/deletee/{id}',[PesananController::class,'delete']);



Route::get('/tambahbuku',[BuukuController::class, 'add']);
Route::post('/store',[BuukuController::class, 'store']);
Route::post('/login',[AdminController::class, 'Login']);
Route::get('/buku/{slug}', [BuukuController::class, 'show']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

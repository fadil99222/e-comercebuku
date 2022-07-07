<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuukuController;

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



Route::get('/tambahbuku',[BuukuController::class, 'add']);
Route::post('/store',[BuukuController::class, 'store']);
Route::get('/buku/{slug}', [BuukuController::class, 'show']);

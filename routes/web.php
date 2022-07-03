<?php

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


Route::get('/',function () {
    return view ('home',[
        "icon"=>"img/icon_booku.png",
        "title"=>"home"
    ]);

});
Route::get('/admin',function () {
    return view ('admin',[
        "icon"=>"img/icon_booku.png",
    ]);

});
Route::get('/novel',function () {
    return view ('novel',[
        "icon"=>"img/icon_booku.png",
        "title"=>"novel"
    ]);
});
Route::get('/computer',function () {
    return view ('computer',[
        "icon"=>"img/icon_booku.png",
        "title"=>"computer"
    ]);

});


Route::get('/manga', function () {
    return view ('manga',[
        "icon"=>"img/icon_booku.png",
        "title"=>"manga"
    ]);

});

Route::get('/admin/tambahbuku', function () {
    return view ('tambahbuku',[
        "icon"=>"img/icon_booku.png",
    ]);

});
Route::get('/buku', function () {
    return view ('buku',[
        "icon"=>"img/icon_booku.png",
        "title"=> "buku"
    ]);

});

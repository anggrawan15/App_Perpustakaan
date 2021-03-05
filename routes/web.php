<?php

use App\Buku;
use App\Peminjaman;
use App\Anggota;

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
    return view('index');
});


Auth::routes();



// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/indexadmin', 'IndexController@index')->name('indexadmin');

Route::get('/book', 'HomeController@index')->name('bookdata');

Route::resource('anggota', 'AnggotaController');
Route::resource('buku', 'BukuController');
Route::resource('peminjaman','PeminjamanController');



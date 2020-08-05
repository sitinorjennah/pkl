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

Route::get('/', function () {
    return view('auths.login');
});

Route::get('/dashboard','AdminController@dashboard');
Route::get('/dashboard','DashboardController@index')->middleware('auth');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//kategori pemasukan
Route::get('/Kategori-Pemasukan','KategoriPemasukanController@index')->name('Kategori-Pemasukan');
Route::get('/Create-Kategori','KategoriPemasukanController@create')->name('Create-Kategori');
Route::post('/simpan-kategori','KategoriPemasukanController@store')->name('simpan-kategori');
Route::get('/edit-kategori/{id}','KategoriPemasukanController@edit')->name('edit-kategori');
Route::post('/update-kategori/{id}','KategoriPemasukanController@update')->name('update-kategori');
Route::get('/delete-kategori/{id}','KategoriPemasukanController@destroy')->name('delete-kategori');

//kategori pengeluaran
Route::get('/Kategori-Pengeluaran','kategoripengeluaranController@index')->name('Kategori-Pengeluaran');
Route::get('/create-kp','kategoripengeluaranController@create')->name('create-kp');
Route::post('/simpan-kategori','kategoripengeluaranController@store')->name('simpan-kategori');
Route::get('/edit-kategori/{id}','kategoripengeluaranController@edit')->name('edit-kategori');
Route::post('/update-kategori/{id}','kategoripengeluaranController@update')->name('update-kategori');
Route::get('/delete-kategori/{id}','kategoripengeluaranController@destroy')->name('delete-kategori');


//pemasukan
Route::get('/danamasuk','DanaMasukController@index')->name('danamasuk');
Route::get('/create-pemasukan','DanaMasukController@create')->name('create-pemasukan');
Route::post('/simpan-pemasukan','DanaMasukController@store')->name('simpan-pemasukan');

//pengeluaran
Route::get('/pengeluaran','pengeluaranController@index')->name('pengeluaran');
Route::get('/create-pengeluaran','pengeluaranController@create')->name('create-pengeluaran');
Route::post('/simpan-pengeluaran','pengeluaranController@store')->name('simpan-pengeluaran');

//inventaris
Route::get('/Inventaris','InventarisController@index')->name('Inventaris');
Route::get('/Create-Inventaris','InventarisController@create')->name('Create-Inventaris');
Route::post('/simpanInvent','InventarisController@store')->name('simpan-Inventaris');
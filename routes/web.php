<?php

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

Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::post('/pegawai/store', 'PegawaiController@store');

<<<<<<< HEAD
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
=======
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/siswa/{sort}', 'SiswaController@index');
>>>>>>> master

Route::get('/pegawai/cari', 'PegawaiController@cari');

Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');

Route::put('/pegawai/update/{id}','PegawaiController@update');

Route::get('/pegawai/{sort}', 'PegawaiController@index');



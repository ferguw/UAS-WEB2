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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route halaman makul
Route::get('/makul', 'MakulController@index')->name('makul');
Route::get('/tambah-makul', 'MakulController@create')->name('tambah.makul');
Route::post('/simpan-makul', 'makulController@store')->name('simpan.makul');

Route::get('/edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'makulController@update')->name('makul.update');
Route::get('/hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');

//route halaman mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/tambah-mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('/simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('/edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('/hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.hapus');

//route halaman nilai
Route::get('/nilai', 'NilaiController@index')->name('nilai');
Route::get('/tambah-nilai', 'NilaiController@create')->name('tambah.nilai');
Route::post('/simpan-nilai', 'NilaiController@store')->name('simpan.nilai');

Route::get('/edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('/hapus-nilai/{id}', 'NilaiController@destroy')->name('nilai.hapus');
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

//awal
Route::get('/', 'AwalController@index');

//Halaman Matakuliah
Route::get('/matakuliah', 'MatakuliahController@index');//home
Route::get('/matakuliah/tambah', 'MatakuliahController@create');//tambah data
//Route::get('/matakuliah/{matakuliah}', 'MatakuliahController@show');
Route::post('/matakuliah/tambah', 'MatakuliahController@store');
Route::get('/matakuliah/hapus/{id}', 'MatakuliahController@hapus');  //hapus
Route::get('/matakuliah/edit/{id}', 'MatakuliahController@edit');  //edit
Route::put('/matakuliah/update/{id}', 'MatakuliahController@update');  //UPDATE

//Halaman Dosen
Route::get('/dosen', 'DosenController@index');
Route::get('/dosen/tambah', 'DosenController@create');//tambah data
Route::post('/dosen/tambah', 'DosenController@store');
Route::get('/dosen/hapus/{id}', 'DosenController@hapus');  //hapus
Route::get('/dosen/edit/{id}', 'DosenController@edit');  //edit
Route::put('/dosen/update/{id}', 'DosenController@update');  //UPDATE

//Halaman Kurikulum
Route::get('/kurikulum', 'KurikulumController@index');
Route::get('/kurikulum/tambah', 'KurikulumController@create');//tambah data
Route::post('/kurikulum/tambah', 'KurikulumController@store');
Route::get('/kurikulum/hapus/{id}', 'KurikulumController@hapus');  //hapus
Route::get('/kurikulum/edit/{id}', 'KurikulumController@edit');  //edit
Route::put('/kurikulum/update/{id}', 'KurikulumController@update');  //UPDATE

//Halaman Program Studi
Route::get('/prodi', 'ProdiController@index');
Route::get('/prodi/tambah', 'ProdiController@create');//tambah data
Route::post('/prodi/tambah', 'ProdiController@store');
Route::get('/prodi/hapus/{id}', 'ProdiController@hapus');  //hapus
Route::get('/prodi/edit/{id}', 'ProdiController@edit');  //edit
Route::put('/prodi/update/{id}', 'ProdiController@update');  //UPDATE


//Halaman Program Studi
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'MahasiswaController@create');//tambah data
Route::post('/mahasiswa/tambah', 'MahasiswaController@store');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');  //hapus
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');  //edit
Route::put('/mahasiswa/update/{id}', 'MahasiswaController@update');  //UPDATE


//Halaman KRS
Route::get('/krs', 'KrsController@index');
Route::get('/krs/tambah', 'KrsController@create');//tambah data
Route::post('/krs/tambah', 'KrsController@store');
Route::get('/krs/hapus/{id}', 'KrsController@hapus');  //hapus
Route::get('/krs/edit/{id}', 'KrsController@edit');  //edit
Route::put('/krs/update/{id}', 'KrsController@update');  //UPDATE

//Halaman Penawaran Matakuliah
Route::get('/penawaran_mk', 'PenawaranMKController@index');
Route::get('/penawaran_mk/tambah', 'PenawaranMKController@create');//tambah data
Route::post('/penawaran_mk/tambah', 'PenawaranMKController@store');
Route::get('/penawaran_mk/hapus/{id}', 'PenawaranMKController@hapus');  //hapus
Route::get('/penawaran_mk/edit/{id}', 'PenawaranMKController@edit');  //edit
Route::put('/penawaran_mk/update/{id}', 'PenawaranMKController@update');  //UPDATE

//Halaman Pengampu
Route::get('/pengampu', 'PengampuController@index');
Route::get('/pengampu/tambah', 'PengampuController@create');//tambah data
Route::post('/pengampu/tambah', 'PengampuController@store');
Route::get('/pengampu/hapus/{id}', 'PengampuController@hapus');  //hapus
Route::get('/pengampu/edit/{id}', 'PengampuController@edit');  //edit
Route::put('/pengampu/update/{id}', 'PengampuController@update');  //UPDATE
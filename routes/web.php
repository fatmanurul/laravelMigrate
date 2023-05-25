<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\UserController;
use APP\Http\Controllers\HalamanController;
use APP\Http\Controllers\TugasController;
use APP\Http\Controllers\SiswaController;

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

Route::get('/user', 'UserController@halo');

Route::get('/halaman1', 'HalamanController@index');

Route::get('/halaman2', 'HalamanController@halaman2');

Route::get('/welcome', 'HalamanController@welcome');

Route::get('/tugas', 'TugasController@tugas');

Route::get('/tampil', 'UserController@index');

Route::get('/tambah_data', 'UserController@tambah_data');
Route::post('/tambah_data', 'UserController@input_data');

Route::get('/tampil_data', 'UserController@tampil_data');

Route::get('/hapus_data/{id}', 'UserController@hapus_data');

Route::get('/edit_data/{id}', 'UserController@edit_data');
Route::post('/edit_data/{id}', 'UserController@update_data');

Route::get('/tambah_data1', 'SiswaController@tambah_data1');
Route::post('/tambah_data1', 'SiswaController@input_data1');

Route::get('/tampil_data1', 'SiswaController@tampil_data1');

Route::get('/hapus_data1/{id}', 'SiswaController@hapus_data1');

Route::get('/edit_data1/{id}', 'SiswaController@edit_data1');
Route::post('/edit_data1/{id}', 'SiswaController@update_data1');
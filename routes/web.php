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

Route::prefix('mahasiswa')->group(function () {
	Route::get('/', 'MahasiswaController@index');
	Route::get('/create', 'MahasiswaController@create');
	Route::get('/show/{id}', 'MahasiswaController@show');
	Route::post('/create', 'MahasiswaController@insert');
	Route::get('/hapus/{id}', 'MahasiswaController@hapus');
	Route::get('/edit/{id}', 'MahasiswaController@edit');
	Route::post('/update', 'MahasiswaController@update');

});

Route::prefix('admin')->group(function () {
	Route::view('app', 'admin.layouts.app');
});

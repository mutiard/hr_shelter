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
    return view('karyawan.index');
});

//karyawan
Route::get('/', 'KaryawanController@index');
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/', 'KaryawanController@store');
Route::get('/karyawan/{id}/show', 'KaryawanController@show');
Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
Route::match(['put','patch'],'/karyawan/{id}/update', 'KaryawanController@update');
Route::get('/karyawan/{id}/aktif', 'KaryawanController@statusActive');
Route::get('/karyawan/{id}/nonaktif', 'KaryawanController@statusNotActive');
// Route::get('/coba/create', 'CobaController@create');
// Route::post('/', 'CobaController@store');
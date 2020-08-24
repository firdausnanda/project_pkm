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
    return view('welcome');
});

//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin','admin@dashboard')->name('admin.dashboard')->middleware('role');
Route::get('/akun','admin@akun');

//mahasiswa
Route::get('/mahasiswa','mahasiswa@dashboard')->name('mahasiswa.dashboard')->middleware('role');	
Route::get('/data_diri','mahasiswa@data_diri');
Route::get('/data_pkm','mahasiswa@data_pkm');

//modal coba

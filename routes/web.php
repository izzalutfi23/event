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
// Utama
Route::get('/', 'Utamacontroller@index');
Route::get('/acara/daftar/{macara}', 'Utamacontroller@daftar');
Route::post('/postdaftar', 'Utamacontroller@postdaftar');
Route::get('/passdaftar', 'Utamacontroller@passdaftar');


// Login
Route::get('/login', 'Authcontroller@index')->name('login');
Route::post('/postlogin', 'Authcontroller@postlogin');
Route::get('/logout', 'Authcontroller@logout');


// Halaman admin
// Dashboard
Route::group(['middleware'=>'auth'], function(){
	Route::get('/dashboard', 'DashboardController@index');
	// Acara
	Route::get('/acara', 'Acaracontroller@index');
	Route::post('/acara', 'Acaracontroller@store');
	Route::get('/acara/edit/{macara}', 'Acaracontroller@edit');
	Route::patch('/acara/{macara}', 'Acaracontroller@update');
	Route::get('/acara/del/{macara}', 'Acaracontroller@destroy');
	// Peserta
	Route::get('/peserta', 'Pesertacontroller@index');
	Route::get('/peserta/ver/{mpeserta}', 'Pesertacontroller@verif');
	Route::get('/peserta/unver/{mpeserta}', 'Pesertacontroller@unverif');
	Route::get('/peserta/del/{mpeserta}', 'Pesertacontroller@destroy');
	// Peserta Verif
	Route::get('/pesertav', 'Pesertaverif@index');
	// Admin
	Route::get('/user', 'Usercontroller@index');
	Route::post('/user', 'Usercontroller@store');
	Route::get('/user/del/{user}', 'Usercontroller@destroy');
});

// Doorprize
Route::get('/doorprize', 'Doorprize@index');
Route::post('/pemenang', 'Doorprize@pemenang');
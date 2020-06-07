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

Route::resource('penjual', 'PenjualController');
Route::resource('pembeli', 'PembeliController');
Route::resource('dashboard', 'DashboardController');
Route::resource('operator', 'OperatorController');
Route::resource('suplyer', 'SuplyerController');
Route::resource('pembayaran', 'PembayaranController');
Auth::routes();

Route::get('/home', 'PenjualController@index')->name('home');

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

// Format tanggal
Route::get('tanggal','ApiController@tanggal');

Route::get('/','ApiController@userinfo');
Route::get('/geoip', 'ApiController@geoip');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('api', 'ApiController@api');
Route::get('/home', 'HomeController@index')->name('home');
// Route::livewire('/jabatan','jabatan.index')->name('jabatan.index');
Route::livewire('/jabatan/create','jabatan.create')->name('jabatan.create');
Route::livewire('/jabatan/edit/{id}', 'jabatan.edit')->name('jabatan.edit');
Route::get('/jabatan/profile','HomeController@profile')->name('jabatan.upload');
Route::post('/jabatan/profile','HomeController@update')->name('update');
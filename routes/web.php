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
//Nanti ubah lagi routenya, dipisah pisah, sekarang untuk development aja
Route::resource('prestasis', 'PrestasiController');
Route::resource('jurusans', 'JurusanController');
Route::resource('gallerys', 'GalleryController');
Route::resource('gurus', 'GuruController');
Route::resource('kemitraans', 'KemitraanController');
Route::resource('madings', 'MadingController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

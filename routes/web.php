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

Route::group(['prefix' => 'admin'], function() {
     //crud prestasis
     Route::get('/prestasis', 'PrestasiController@index')->name('admin.prestasis.index');
     Route::get('/prestasis/create', 'PrestasiController@create')->name('admin.prestasis.create');
     Route::post('/prestasis', 'PrestasiController@store')->name('admin.prestasis.store');
     Route::get('/prestasis/{id}', 'PrestasiController@edit')->name('admin.prestasis.edit');
     Route::patch('/prestasis/{id}', 'PrestasiController@update')->name('admin.prestasis.update');
     Route::delete('/prestasis/{id}', 'PrestasiController@destroy')->name('admin.prestasis.destroy');
     
     //crud jurusans
     Route::get('/jurusans', 'JurusansController@index')->name('admin.jurusans.index');
     Route::get('/jurusans/create', 'JurusansController@create')->name('admin.jurusans.create');
     Route::post('/jurusans', 'JurusansController@store')->name('admin.jurusans.store');
     Route::get('/jurusans/{id}', 'JurusansController@edit')->name('admin.jurusans.edit');
     Route::patch('/jurusans/{id}', 'JurusansController@update')->name('admin.jurusans.update');
     Route::delete('/jurusans/{id}', 'JurusansController@destroy')->name('admin.jurusans.destroy');

     //crud gallerys
     Route::get('/gallerys', 'GalleryController@index')->name('admin.gallerys.index');
     Route::get('/gallerys/create', 'GalleryController@create')->name('admin.gallerys.create');
     Route::post('/gallerys', 'GalleryController@store')->name('admin.gallerys.store');
     Route::get('/gallerys/{id}', 'GalleryController@edit')->name('admin.gallerys.edit');
     Route::patch('/gallerys/{id}', 'GalleryController@update')->name('admin.gallerys.update');
     Route::delete('/gallerys/{id}', 'GalleryController@destroy')->name('admin.gallerys.destroy');

     //crud gurus
     Route::get('/gurus', 'GuruController@index')->name('admin.gurus.index');
     Route::get('/gurus/create', 'GuruController@create')->name('admin.gurus.create');
     Route::post('/gurus', 'GuruController@store')->name('admin.gurus.store');
     Route::get('/gurus/{id}', 'GuruController@edit')->name('admin.gurus.edit');
     Route::patch('/gurus/{id}', 'GuruController@update')->name('admin.gurus.update');
     Route::delete('/gurus/{id}', 'GuruController@destroy')->name('admin.gallerys.destroy');

     //crud kemitraans
     Route::get('/kemitraans', 'KemitraanController@index')->name('admin.kemitraans.index');
     Route::get('/kemitraans/create', 'KemitraanController@create')->name('admin.kemitraans.create');
     Route::post('/kemitraans', 'KemitraanController@store')->name('admin.kemitraans.store');
     Route::get('/kemitraans/{id}', 'KemitraanController@edit')->name('admin.kemitraans.edit');
     Route::patch('/kemitraans/{id}', 'KemitraanController@update')->name('admin.kemitraans.update');
     Route::delete('/kemitraans/{id}', 'KemitraanController@destroy')->name('admin.kemitraans.destroy');

     //crud madings
     Route::get('/madings', 'MadingController@index')->name('admin.madings.index');
     Route::get('/madings/create', 'MadingController@create')->name('admin.madings.create');
     Route::post('/madings', 'MadingController@store')->name('admin.madings.store');
     Route::get('/madings/{id}', 'MadingController@edit')->name('admin.madings.edit');
     Route::patch('/madings/{id}', 'MadingController@update')->name('admin.madings.update');
     Route::delete('/madings/{id}', 'MadingController@destroy')->name('admin.madings.destroy');

     //dashbord
     Route::get('/', function (){
        return view('admin.index');
     })->name('admin.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

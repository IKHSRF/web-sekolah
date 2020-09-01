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
//User
Route::get('/', 'LandingController@getHome')->name('user.home');
//menu profile
Route::get('/sejarah', function () {
    return view('user.profile.sejarah');
})->name('user.profile.sejarah');

Route::get('/guru', function () {
    return view('user.profile.guru');
})->name('user.profile.guru');

Route::get('/kemitraan', function () {
    return view('user.profile.kemitraan');
})->name('user.profile.kemitraan');

Route::get('/prestasi', function () {
    return view('user.profile.prestasi');
})->name('user.profile.prestasi');

Route::get('/statistik', function () {
    return view('user.profile.statistik');
})->name('user.profile.statistik');

Route::get('/stuktur', function () {
    return view('user.profile.stuktur');
})->name('user.profile.stuktur');

Route::get('/visimisi', function () {
    return view('user.profile.visimisi');
})->name('user.profile.visimisi');

//menu jurusan
Route::get('/jurusan/rekayasa-perangkat-lunak', function(){
    return view('user.jurusan.rpl');
})->name('user.jurusan.rpl');

//menu kesiswaan
Route::get('/kesiswaan/mading', function(){
    return view('user.kesiswaan.mading');
})->name('user.kesiswaan.mading');

//menu kurikulum
Route::get('/kurikulum/stuktur', function(){
    return view('user.kurikulum.stuktur');
})->name('user.kurikulum.stuktur');

Route::get('/sarana-dan-prasarana', function(){
    return view('user.sarana');
})->name('user.sarana');
Route::get('/gallery', function(){
    return view('user.gallery');
})->name('user.gallery');
//dashbord
Route::group(['prefix' => 'admin'], function () {
    //crud prestasis
    Route::get('/prestasis', 'PrestasiController@index')->name('admin.prestasis.index');
    Route::get('/prestasis/create', 'PrestasiController@create')->name('admin.prestasis.create');
    Route::post('/prestasis', 'PrestasiController@store')->name('admin.prestasis.store');
    Route::get('/prestasis/{id}', 'PrestasiController@edit')->name('admin.prestasis.edit');
    Route::patch('/prestasis/{id}', 'PrestasiController@update')->name('admin.prestasis.update');
    Route::delete('/prestasis/{id}', 'PrestasiController@destroy')->name('admin.prestasis.destroy');

    //crud jurusans
    Route::get('/jurusans', 'JurusanController@index')->name('admin.jurusans.index');
    Route::get('/jurusans/create', 'JurusanController@create')->name('admin.jurusans.create');
    Route::post('/jurusans', 'JurusanController@store')->name('admin.jurusans.store');
    Route::get('/jurusans/{id}', 'JurusanController@edit')->name('admin.jurusans.edit');
    Route::patch('/jurusans/{id}', 'JurusanController@update')->name('admin.jurusans.update');
    Route::delete('/jurusans/{id}', 'JurusanController@destroy')->name('admin.jurusans.destroy');

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
    Route::delete('/gurus/{id}', 'GuruController@destroy')->name('admin.gurus.destroy');

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

    //crud sejarah
    Route::get('/sejarahs', 'SejarahController@index')->name('admin.sejarahs.index');
    Route::get('/madings/create', 'MadingController@create')->name('admin.madings.create');
    Route::post('/sejarahs', 'SejarahController@store')->name('admin.sejarahs.store');
    Route::get('/sejarahs/{id}', 'SejarahController@edit')->name('admin.sejarahs.edit');
    Route::patch('/sejarahs/{id}', 'SejarahController@update')->name('admin.sejarahs.update');
    Route::delete('/sejarahs/{id}', 'SejarahController@destroy')->name('admin.sejarahs.destroy');

    //crud sarana pra sarana
    Route::get('/saranas', 'SaranaController@index')->name('admin.saranas.index');
    Route::get('/saranas/create', 'SaranaController@create')->name('admin.saranas.create');
    Route::post('/saranas', 'SaranaController@store')->name('admin.saranas.store');
    Route::get('/saranas/{id}', 'SaranaController@edit')->name('admin.saranas.edit');
    Route::patch('/saranas/{id}', 'SaranaController@update')->name('admin.saranas.update');
    Route::delete('/saranas/{id}', 'SaranaController@destroy')->name('admin.saranas.destroy');

    //crud kalender akademik
    Route::get('/akademiks', 'AkademikController@index')->name('admin.akademiks.index');
    Route::get('/akademiks/create', 'AkademikController@create')->name('admin.akademiks.create');
    Route::post('/akademiks', 'AkademikController@store')->name('admin.akademiks.store');
    Route::get('/akademiks/{id}', 'AkademikController@edit')->name('admin.akademiks.edit');
    Route::patch('/akademiks/{id}', 'AkademikController@update')->name('admin.akademiks.update');
    Route::delete('/akademiks/{id}', 'AkademikController@destroy')->name('admin.akademiks.destroy');

    //crud visi misi
    Route::get('/mottos', 'MottoController@index')->name('admin.mottos.index');
    Route::get('/mottos/create', 'MottoController@create')->name('admin.mottos.create');
    Route::post('/mottos', 'MottoController@store')->name('admin.mottos.store');
    Route::get('/mottos/{id}', 'MottoController@edit')->name('admin.mottos.edit');
    Route::patch('/mottos/{id}', 'MottoController@update')->name('admin.mottos.update');
    Route::delete('/mottos/{id}', 'MottoController@destroy')->name('admin.mottos.destroy');

    //crud kontak
    Route::get('/kontaks', 'KontakController@index')->name('admin.kontaks.index');
    Route::get('/kontaks/create', 'KontakController@create')->name('admin.kontaks.create');
    Route::post('/kontaks', 'KontakController@store')->name('admin.kontaks.store');
    Route::get('/kontaks/{id}', 'KontakController@edit')->name('admin.kontaks.edit');
    Route::patch('/kontaks/{id}', 'KontakController@update')->name('admin.kontaks.update');
    Route::delete('/kontaks/{id}', 'KontakController@destroy')->name('admin.kontaks.destroy');

    //crud banner
    Route::get('/banners', 'BannerController@index')->name('admin.banners.index');
    Route::get('/banners/create', 'BannerController@create')->name('admin.banners.create');
    Route::post('/banners', 'BannerController@store')->name('admin.banners.store');
    Route::get('/banners/{id}', 'BannerController@edit')->name('admin.banners.edit');
    Route::patch('/banners/{id}', 'BannerController@update')->name('admin.banners.update');
    Route::delete('/banners/{id}', 'BannerController@destroy')->name('admin.banners.destroy');

    //dashbord
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

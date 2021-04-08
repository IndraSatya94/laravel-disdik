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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/','PagesController@home');
Route::get('/berita','PagesController@berita');

//bidang paud
Route::get('/izinpembelajaranpaud','PagesController@izinpembelajaranpaud');
Route::get('/legalisasiijazahpaud','PagesController@legalisasiijazahpaud');
Route::get('/penggantiijazahpaud','PagesController@penggantiijazahpaud');
Route::get('/pembetulanijazahpaud','PagesController@pembetulanijazahpaud');
Route::get('/izinpendirianpaud','PagesController@izinpendirianpaud');

//bidang SD
Route::get('/izinpembelajaransd','PagesController@izinpembelajaransd');
Route::get('/legalisasiijazahsd','PagesController@legalisasiijazahsd');
Route::get('/penggantiijazahsd','PagesController@penggantiijazahsd');

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

Route::get('/', 'PagesController@home');
Route::get('/jadwal-dokter', 'PagesController@jadwal');
Route::get('/rawat-inap', 'PagesController@rawat');
Route::get('/kerjasama', 'PagesController@kerjasama');
Route::get('/kandungan', 'PagesController@kebidanan');
Route::get('/anak', 'PagesController@anak');
Route::get('/penyakit-dalam', 'PagesController@pdalam');
Route::get('/bedah', 'PagesController@bedah');
Route::get('/promo', 'PagesController@promo');
Route::get('/kontak', 'PagesController@kontak');
Route::get('/news', 'PagesController@news');
Route::get('/radiologi', 'PagesController@radiologi');
Route::get('/instalasi-farmasi', 'PagesController@farmasi');
Route::get('/laboratorium', 'PagesController@laboratorium');
Route::get('/igd-24jam', 'PagesController@igd');
Route::get('/radiologi', 'PagesController@radiologi');

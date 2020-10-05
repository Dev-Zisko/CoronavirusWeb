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

Route::get('/', 'PageController@view_coronavirus')->name('coronavirus');

Route::post('/', 'PageController@filter_coronavirus')->name('coronavirus');

Route::get('/coronavirus', 'PageController@view_coronavirus')->name('coronavirus');

Route::post('/coronavirus', 'PageController@filter_coronavirus')->name('coronavirus');

Route::get('/detalle/{id}', 'PageController@view_detail')->name('detalle');

Route::get('/admin/{id}', 'PageController@view_admin')->name('admin');

Route::post('/admin/{id}', 'PageController@process_data')->name('admin');
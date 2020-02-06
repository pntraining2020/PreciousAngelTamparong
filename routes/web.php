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

Route::get('time', 'timeController@index')->name('time');
Route::get('createTime', 'timeController@createTime')->name('createTime');
Route::get('insert', 'timeController@insert')->name('insert');
Route::post('insert_time', 'timeController@insert')->name('insert');
Route::get('timeEnd', 'timeController@TimeDisplay');
Route::post('insert_timeEnd', 'timeController@TimeDisplay');





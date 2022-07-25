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

Route::get('/', function(){
    return view('layout.master');
});

Route::get('/table', function(){
    return view('table.table');
});

Route::get('/data-tables', function(){
    return view('table.data-tables');
});

Route::get('/cast','CastController@index');

Route::get('/cast/create','CastController@create');

Route::post('/cast','CastController@store');

Route::get('/cast/{cast_id}','CastController@show');

Route::get('/cast/{cast_id}/edit','CastController@edit');

Route::put('/cast/{cast_id}','CastController@update');

Route::delete('/cast/{cast_id}','CastController@destroy');
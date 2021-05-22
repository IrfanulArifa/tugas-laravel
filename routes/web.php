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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@form');

Route::post('/welcome','AuthController@daftar');

Route::get('/master', function(){
    return view('adminlte.master');
});

Route::get('/items', function(){
    return view('items.index');
});

Route::get('/tables', function(){
    return view('items.tables');
});

Route::get('/data-tables', function(){
    return view('items.datatables');
});

Route::get('/cast/create', 'CastController@create');

Route::get('/cast', 'CastController@index');

Route::post('/cast', 'CastController@store');

Route::get('/cast/{cast_id}', 'CastController@show');

Route::get('/cast/{cast_id}/edit', 'CastController@edit');

Route::put('/cast/{cast_id}', 'CastController@update');

Route::delete('/cast/{cast_id}', 'CastController@destroy');
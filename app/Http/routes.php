<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('layouts.home');
//});

Route::resource('/', 'MembrosController');

Route::get('/membros/show', 'MembrosController@Show');
Route::get('/membros/edit', 'MembrosController@Edit');
Route::get('/membros/delete', 'MembrosController@Destroy');

Route::get('/instituicao/show', 'InstituicaoController@Show');
Route::get('/instituicao/edit', 'InstituicaoController@Edit');
Route::get('/instituicao/delete', 'InstituicaoController@Destroy');

Route::resource('membros', 'MembrosController');

Route::resource('instituicao', 'InstituicaoController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

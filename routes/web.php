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


Route::get('/incomes', 'AccountController@incomes');
Route::get('/expenses', 'AccountController@expenses');





Route::get('/create', 'AccountController@create');
Route::get('/', 'AccountController@index');
Route::post('/transactions', 'AccountController@store');
Route::get('/transactions/{id}', 'AccountController@show');
Route::get('/transactions/{id}/edit', 'AccountController@edit');
Route::put('/transactions/{id}', 'AccountController@update');
//Route::delete('/transactions/{id}', 'AccountController@destroy');
Route::get('/transactions/{id}/delete', 'AccountController@destroy');




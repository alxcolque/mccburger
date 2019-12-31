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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/recipe', function () {
    return view('recipe');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('clienteweb','ClienteWebController@index')->name('home');
Route::get('cesta','ClienteWebController@cesta');

Route::get('cajero','CajeroController@index');

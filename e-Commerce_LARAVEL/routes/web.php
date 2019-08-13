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

Route::get('/',  'ProductsController@index');

//
// Route::get('movies/', 'MoviesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');

Route::get('/products/index', 'ProductsController@index');

Route::get('/products/show', 'ProductsController@show');

Route::delete('/products/show/{id}', 'ProductsController@destroy');

Route::put('/products/{id}', 'ProductsController@update'); // Ruta para actualizar una película

Route::get('/products/edit/{id}', 'ProductsController@edit');


Route::get('/products/show', 'ProductsController@search');

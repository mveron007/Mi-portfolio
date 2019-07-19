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



Route::get('/actors', 'ActorsController@index');

 Route::get('/movies/detail/{id}', 'MoviesController@show');


Route::get('actors/search', 'ActorsController@search');


Route::get('movies/index', 'MoviesController@index');



Route::get('/movies/agregarPelicula', 'MoviesController@create');
Route::post('/movies/agregarPelicula', 'MoviesController@store');


//
// Route::get('movies/', 'MoviesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');

Route::get('/products/index', 'ProductsController@index');

// Route::get('/products/show/{id}', 'ProductsController@show');

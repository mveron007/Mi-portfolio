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

Route::get('test', function() {
    //
    Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large']);

});

Route::get('cart', function() {
    //
    return Cart::content();
});


Route::get('total', function() {
    //
    return Cart::total();
});

Route::get('subtotal', function() {
    //
    return Cart::subtotal();
});




Route::get('/',  'ProductsController@index');

//
// Route::get('movies/', 'MoviesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');

Route::get('/products/index', 'ProductsController@index');

Route::get('/products/detail/{id}', 'ProductsController@detail');


// Route::get('/products/show', 'ProductsController@show');
//
// Route::delete('/products/show/{id}', 'ProductsController@destroy');
//
// Route::put('/products/{id}', 'ProductsController@update'); // Ruta para actualizar una película
//
// Route::get('/products/edit/{id}', 'ProductsController@edit');
//
//
// Route::get('/products/show', 'ProductsController@search');

Route::get('home/searchredirect', function(){

    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();

    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", "HomeController@buscar");


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/series', 'Admin\SeriesController@index');
    Route::get('/admin/series/{id}', 'Admin\SeriesController@edit');
    Route::get('/products/show', 'ProductsController@show');

    Route::delete('/products/show/{id}', 'Admin\ProductsController@destroy');

    Route::put('/products/{id}', 'Admin\ProductsController@update');  //Ruta para actualizar una película

    Route::get('/products/edit/{id}', 'Admin\ProductsController@edit');


    Route::get('/products/show', 'Admin\ProductsController@search');
});

Route::match(['get', 'post'], 'admin/createAdmin', 'AdminController@createAdmin');

Route::get('admin', 'AdminController@admin');

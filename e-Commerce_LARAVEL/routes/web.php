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



Route::get('checkout', 'CartController@checkout');


Route::get('total', function() {
    //
    return Cart::total();
});

Route::get('subtotal', function() {
    //
    return Cart::subtotal();
});


Route::get('cart', 'CartController@index') ;
Route::get('cart/add/{add}', 'CartController@addItem') ;

Route::get('cart/remove/{id}', 'CartController@removeItem' );





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

    // Si el argumento search está vacío regresar a la página anterior 
    if (empty(Input::get('search'))) return redirect()->back();

    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", "HomeController@buscar");

//Filtro para usuario administrador
Route::group(['middleware' => 'admin'], function () {

    Route::get('/products/show', 'ProductsController@show');

    Route::delete('/products/show/{id}', 'ProductsController@destroy');  //Ruta para eliminar una película

    Route::put('/products/{id}', 'ProductsController@update');  //Ruta para actualizar una película

    Route::get('/products/edit/{id}', 'ProductsController@edit');  //Ruta para editar una película


    Route::get('/products/show', 'ProductsController@search');
});

//Fin de filtro administrador

Route::match(['get', 'post'], 'admin/createAdmin', 'AdminController@createAdmin');

Route::get('admin', 'AdminController@admin');

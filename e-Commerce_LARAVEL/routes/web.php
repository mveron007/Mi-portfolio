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

// Rutas para el carrito de compras
Route::get('cart', 'CartController@index') ;
Route::get('cart/add/{id}', 'CartController@addItem') ;
// Route::post('/cart', 'CartController@cart');

Route::get('cart/remove/{id}', 'CartController@removeItem' );


Route::get('checkout', 'CartController@checkout');


Route::get('total', function() {
    //
    return Cart::total();
});

Route::get('subtotal', function() {
    //
    return Cart::subtotal();
});


Route::get('/',  'ProductsController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de creación de productos
Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');

Route::get('/products/index', 'ProductsController@index');

Route::get('/products/detail/{id}', 'ProductsController@detail');

// Rutas de buscador
Route::get('home/searchredirect', function(){

    // Si el argumento search está vacío regresar a la página anterior
    if (empty(Input::get('search'))) return redirect()->back();

    $search = urlencode(e(Input::get('search')));  // se codifica una cadena p/ ser usada como la parte de consulta de una URL
    $route = "home/search/$search";
    return redirect($route);
});

Route::get("home/search/{search}", "ProductsController@buscar");
// Fin de rutas de buscador


//Filtro para usuario administrador
Route::group(['middleware' => 'admin'], function () {

    Route::get('/products/show', 'ProductsController@show');

    Route::delete('/products/show/{id}', 'ProductsController@destroy');  //Ruta para eliminar una película

    Route::put('/products/{id}', 'ProductsController@update');  //Ruta para actualizar una película

    Route::get('/products/edit/{id}', 'ProductsController@edit');  //Ruta para editar una película


    Route::get('/products/show', 'ProductsController@search'); //Ruta para mostrar todos los productos
});

//Fin de filtro administrador

Route::match(['get', 'post'], 'admin/createAdmin', 'AdminController@createAdmin');

// Route::get('admin', 'AdminController@admin');

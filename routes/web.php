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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categorias', 'CategoriaController');

Route::resource('productos', 'ProductoController');
 
Route::get('cart', 'ProductoController@cart');
 
Route::get('add-to-cart/{id}', 'ProductoController@addToCart');
Route::patch('update-cart', 'ProductoController@updateCart');
 
Route::delete('remove-from-cart', 'ProductoController@removeCart');

Route::resource('clientes', 'ClienteController');

Route::resource('clientes', 'ClienteController');

Route::resource('rols', 'RolController');

Route::resource('ventas', 'VentaController');

Route::resource('detalleVentas', 'Detalle_VentaController');
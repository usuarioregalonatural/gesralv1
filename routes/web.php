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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function () {return view('home');});

// Proveedores
Route::get('/alta-providers', 'ProvidersController@create')->name('provalta');
Route::post('/alta-providers', 'ProvidersController@store');
Route::get('/providers', 'ProvidersController@index');
Route::get('/providers/{id?}', 'ProvidersController@show')->name('provshow');
Route::get('/providers/{id?}/edit', 'ProvidersController@edit');
Route::post('/providers/{id?}/delete', 'ProvidersController@destroy');
Route::post('/providers/{id?}/edit', 'ProvidersController@update');

//Clientes
Route::get('/alta-customers', 'CustomersController@create')->name('custalta');
Route::post('/alta-customers', 'CustomersController@store');
Route::get('/customers', 'CustomersController@index')->name('customers');
Route::get('/customers/{id?}', 'CustomersController@show')->name('custshow');
Route::get('/customers/{id?}/edit', 'CustomersController@edit');
Route::post('/customers/{id?}/delete', 'CustomersController@destroy');
Route::post('customers/{id?}/edit', 'CustomersController@update');

//Categorias Productos
Route::get('/alta-catprods', 'CatProductsController@create')->name('catealta');
Route::post('/alta-catprods', 'CatProductsController@store');
Route::get('/catprods', 'CatProductsController@index');
Route::get('/catprods/{id?}', 'CatProductsController@show')->name('cateshow');
Route::get('/catprods/{id?}/edit', 'CatProductsController@edit');
Route::post('/catprods/{id?}/delete', 'CatProductsController@destroy');
Route::post('catprods/{id?}/edit', 'CatProductsController@update');

//Route::get('/vic', 'CatProductsController@index');
//Route::get('altavic', 'CustomersController@create')->name('altacustomer');


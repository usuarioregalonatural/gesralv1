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
Route::get('/alta-providers', 'ProvidersController@create');
Route::post('/alta-providers', 'ProvidersController@store');
Route::get('/providers', 'ProvidersController@index');
Route::get('/providers/{id?}', 'ProvidersController@show');
Route::get('/providers/{id?}/edit', 'ProvidersController@edit');
Route::post('/providers/{id?}/delete', 'ProvidersController@destroy');
Route::post('/providers/{id?}/edit', 'ProvidersController@update');

//Clientes
Route::get('/alta-customers', 'CustomersController@create');
Route::post('/alta-customers', 'CustomersController@store');
Route::get('/customers', 'CustomersController@index');
Route::get('/customers/{id?}', 'CustomersController@show');
Route::get('/customers/{id?}/edit', 'CustomersController@edit');
Route::post('/customers/{id?}/delete', 'CustomersController@destroy');
Route::post('customers/{id?}/edit', 'CustomersController@update');

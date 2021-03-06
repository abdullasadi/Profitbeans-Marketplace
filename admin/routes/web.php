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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', 'DashboardController@base');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/categories', 'CatagoriesController@index')->name('categories');
Route::get('/add-category', 'CatagoriesController@add_category')->name('add_category');
Route::post('/add-category', 'CatagoriesController@create');
Route::post('/ajax-request', 'CatagoriesController@ajax_request')->name('ajax_request');

Route::get('/manufacturers', 'ManufacturersController@index')->name('manufacturers');
Route::get('/add-manufacturer', 'ManufacturersController@addManufacturers')->name('add-manufacturer');
Route::post('/add-manufacturer', 'ManufacturersController@create');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/add-product', 'ProductsController@addProduct')->name('add-product');
Route::post('/add-product', 'ProductsController@create');
Route::post('/product-ajax', 'ProductsController@ajax_request')->name('product-ajax');

Auth::routes();

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
Route::get('/','LoginController@login');
//rutas para los cupones
/*
Route::resource('/discount_cupon','DiscountCuponController') ;
Route::get('/discount_cupon/delete/{id}', ['as' => '/discount_cupon/delete', 'uses'=>'DiscountCuponController@delete']);
Route::post('/discount_cupon/search', ['as' => '/discount_cupon/search', 'uses'=>'DiscountCuponController@search']);
*/
Route::resource('/discount_cupon','DiscountCuponController');

//rutas para el metodo
Route::resource('/payment_method','PaymentMethodController') ;
Route::get('/payment_method/delete/{id}', ['as' => '/payment_method/delete', 'uses'=>'PaymentMethodController@delete']);
Route::post('/payment_method/search', ['as' => '/payment_method/search', 'uses'=>'PaymentMethodController@search']);
//rutas de categoria
Route::resource('/category','CategoryController') ;
Route::get('/category/delete/{id}', ['as' => '/category/delete', 'uses'=>'CategoryController@delete']);
Route::post('/category/search', ['as' => '/category/search', 'uses'=>'CategoryController@search']);
//rutas para el provedor
Route::resource('/provider','ProviderController') ;
Route::get('/provider/delete/{id}', ['as' => '/provider/delete', 'uses'=>'ProviderController@delete']);
Route::post('/provider/search', ['as' => '/provider/search', 'uses'=>'ProviderController@search']);
Route::get('/state/{id}','ProviderController@city');
//rutas para el producto
Route::resource('/product','ProductController') ;
Route::get('/product/delete/{id}', ['as' => '/product/delete', 'uses'=>'ProductController@delete']);
Route::post('/product/search', ['as' => '/product/search', 'uses'=>'ProductController@search']);
//rutas para las ordenes de producto
Route::resource('/product_order','ProductOrderController') ;
Route::get('/product_order/delete/{id}', ['as' => '/product_order/delete', 'uses'=>'ProductOrderController@delete']);
Route::get('/product_order/detail/{id}', ['as' => '/product_order/detail', 'uses'=>'ProductOrderController@detail']);
Route::post('/product_order/search', ['as' => '/product_order/search', 'uses'=>'ProductOrderController@search']);
//rutas par usuario
Route::resource('/user','UserController') ;
Route::get('/user/delete/{id}', ['as' => '/user/delete', 'uses'=>'UserController@delete']);
Route::post('/user/search', ['as' => '/user/search', 'uses'=>'UserController@search']);
//rutas del api de cupon
Route::get('/api/cupon', 'ApiCuponController@index');
Route::get('/api/cupon/{id}', 'ApiCuponController@show');
Route::post('/api/cupon', 'ApiCuponController@store');
Route::put('/api/cupon/{id}', 'ApiCuponController@update');
Route::delete('/api/cupon/{id}', 'ApiCuponController@delete');

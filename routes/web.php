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


Route::get('/', 'ProductController@index')->name('products.index');
Route::get('/products/{slug}', 'ProductController@show')->name('products.show');
Route::post('/ace', 'ProductController@store')->name('products.store');
Route::delete('/','ProductController@destroy')->name('products.destroy');
Route::get('/create', 'ProductController@create')->name('products.create');




Route::get('/categories/{slug1}', 'CategoryController@show');
Route::get('categories/products/{slug}','ProductController@show');
Route::get('/admin','AdminController@index');

Route::get('/logout','Auth\LoginController@logout');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//delete products
Route::get('/delete', 'ProductDeleteController@index')->name('delete.index');
Route::post('/delete/{id}', 'ProductDeleteController@destroy')->name('delete.destroy');

Route::get('/add-to-cart/{id_p}','ProductController@getAddToCart')->name('product.addToCart');

Route::get('/reduce/{id_p}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id_p}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart','ProductController@getCart')->name('product.shoppingCart');




Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('/najprodavani', 'ProductController@najprodavani');

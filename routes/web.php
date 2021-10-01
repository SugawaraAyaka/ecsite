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

Route::get('/', 'UsersController@index');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('products')->group(function (){
        Route::get('/', 'ProductsController@search')->name('search.products');
        Route::get('/{id}', 'ProductsController@showDetail')->name('search.detail');
    });
    Route::get('/cart', function () {
        return view('info.cart');
    });
    return view('shopping.completed');
    Route::get('/completed', function () {
    });
    Route::get('/orders', 'OrdersController@index')->name('order_history');
    Route::prefix('orders')->group(function (){
        Route::get('/', 'OrdersController@index')->name('order_history');
        Route::get('/{id}','OrdersController@detail')->name('order_history_detail');
    });
});
Route::prefix('users')->name('users.')->group(function (){
    Route::get('/{id}/edit', 'UsersController@edit')->name('edit');
    Route::put('/{id}/update', 'UsersController@update')->name('update');
    Route::delete('/{id}/delete', 'UsersController@delete')->name('delete');
});
Route::prefix('orders')->group(function (){
    Route::get('/', 'OrdersController@index')->name('order_history');
    Route::get('/{id}','OrdersController@detail')->name('order_history_detail');
});

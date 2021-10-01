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
    return view('top');
});
Route::prefix('products')->group(function (){
    Route::get('/', 'ProductsController@search')->name('search.products');
    Route::get('/{id}', 'ProductsController@showDetail')->name('search.detail');
});
Route::get('/cart', function () {
    return view('info.cart');
});
Route::get('/completed', function () {
    return view('shopping.completed');
});
// Route::middleware('auth')->group(function () {
//     Route::get('/orders', 'OrdersController@index')->name('order_history');
//  });
Route::get('/orders', 'OrdersController@index')->name('order_history');
// Route::get('/orders/id', function () {
//     return view('shopping.order_history_detail');
// });

// Route::get('/orders/id', function () {
//     return view('shopping.order_history_detail');
// });

Route::prefix('users')->name('users.')->group(function (){
    Route::get('/{id}/edit', 'UsersController@edit')->name('edit');
    Route::put('/{id}/update', 'UsersController@update')->name('update');
    Route::delete('/{id}/delete', 'UsersController@delete')->name('delete');
});
Route::prefix('orders')->group(function (){
    Route::get('/', 'OrdersController@index')->name('order_history');
    Route::get('/{id}','OrdersController@detail')->name('order_history_detail');
    Route::post('/completed/{id}', 'OrdersController@store')->name('order_completed');
});
Route::get('/users', function () {
    return view('users.users');
});
Route::get('/users/id/edit', function () {
    return view('users.edit');
});

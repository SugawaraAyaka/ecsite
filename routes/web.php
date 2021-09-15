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
Route::get('/products','ProductsController@search')->name('search.products');

Route::get('/products/id', function () {
    return view('products.detail_a_product');
});
Route::get('/cart', function () {
    return view('info.cart');
});
Route::get('/completed', function () {
    return view('shopping.completed');
});
Route::get('/orders', function () {
    return view('shopping.order_history');
});
Route::get('/orders/id', function () {
    return view('shopping.order_history_detail');
});
Route::get('/users', function () {
    return view('users.users');
});
Route::get('/users/id/edit', function () {
    return view('users.edit');
});

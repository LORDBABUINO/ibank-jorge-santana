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

Route::redirect('/', '/login');

Auth::routes();
Route::redirect('/home', '/products')->name('home');

Route::resource('/products', 'ProductController', ['except' => ['destroy']])->middleware('auth');
Route::get('/products/{product}/delete', 'ProductController@destroy')->name('products.destroy')->middleware('auth');

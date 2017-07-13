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

Route::get('/', [
   'as' => 'home',
   'uses' => 'HomeController@index'
]);

Route::get('product/{id}-{slug}',[
   'as' =>'product.view',
   'uses'=> 'ProductController@view' 
]);

Route::get('cart/view',[
    'as' =>'cart.view',
    'uses'=> 'CartController@view'
]);
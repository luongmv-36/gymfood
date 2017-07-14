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

Route::get('checkout/cart',[
    'as' =>'checkout.cart',
    'uses'=> 'CartController@checkout'
]);

Route::post('checkout/step2',[
    'as' =>'checkout.step2',
    'uses'=> 'CheckoutController@step2'
]);

Route::post('checkout/step3',[
    'as' =>'checkout.step3',
    'uses'=> 'CheckoutController@step3'
]);

Route::post('checkout/step4',[
    'as' =>'checkout.step4',
    'uses'=> 'CheckoutController@step4'
]);

Route::post('checkout/step5',[
    'as' =>'checkout.step5',
    'uses'=> 'CheckoutController@step5'
]);

Route::post('checkout/step6',[
    'as' =>'checkout.step6',
    'uses'=> 'CheckoutController@step6'
]);

Route::post('checkout/order',[
    'as' =>'checkout.order',
    'uses'=> 'CheckoutController@order'
]);
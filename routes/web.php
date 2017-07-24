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
Route::get('checkout/step2',[
    'as' =>'checkout.step2',
    'uses'=> 'CartController@checkout'
]);

Route::post('checkout/step3',[
    'as' =>'checkout.step3',
    'uses'=> 'CheckoutController@step3'
]);
Route::get('checkout/step3',[
    'as' =>'checkout.step3',
    'uses'=> 'CartController@checkout'
]);

Route::post('checkout/step4',[
    'as' =>'checkout.step4',
    'uses'=> 'CheckoutController@step4'
]);
Route::get('checkout/step4',[
    'as' =>'checkout.step4',
    'uses'=> 'CartController@checkout'
]);
Route::post('checkout/step5',[
    'as' =>'checkout.step5',
    'uses'=> 'CheckoutController@step5'
]);

Route::post('checkout/success',[
    'as' =>'checkout.step6',
    'uses'=> 'CheckoutController@step6'
]);
Route::get('checkout/success',[
    'as' =>'checkout.step6',
    'uses'=> 'CheckoutController@successPage'
]);

Route::post('checkout/order',[
    'as' =>'checkout.order',
    'uses'=> 'CheckoutController@order'
]);

Route::get('category/gird/{id?}',[
    'as' =>'category.productgird',
    'uses'=> 'CategoryController@productgird'
])->where('id', '[0-9]+');

Route::get('category/list/{id?}',[
    'as' =>'category.productlist',
    'uses'=> 'CategoryController@productlist'
]);

//Customer
Route::get('customer/register',[
    'as' => 'customer.register',
    'uses' => 'CustomerController@form_register'
]);

Route::post('customer/register',[
    'as' => 'customer.register',
    'uses' => 'CustomerController@register'
]);

Route::get('customer/login',[
    'as' => 'customer.login',
    'uses' => 'CustomerController@form_login'
]);

Route::post('customer/login',[
    'as' => 'customer.login',
    'uses' => 'CustomerController@login'
]);

Route::get('customer/logout',[
    'as' => 'customer.logout',
    'uses' => 'CustomerController@logout'
]);
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/index',[
   'as' => 'dashboard',
    'uses'=>'Admin\DashboardController@dashboard'
]);
//category
Route::get('admin/category/list',[
    'as' => 'admin.category.list',
    'uses'=>'Admin\CategoryController@listCategory'
]);
Route::get('admin/category/create/{id?}',[
    'as' => 'admin.category.create',
    'uses'=>'Admin\CategoryController@formCreate'
]);

Route::post('admin/category/create',[
    'as' => 'admin.category.postcreate',
    'uses'=>'Admin\CategoryController@create'
]);

Route::get('admin/category/delete/{id?}',[
    'as' => 'admin.category.delete',
    'uses'=>'Admin\CategoryController@delete'
]);
//product
Route::get('admin/product/list',[
    'as' => 'admin.product.list',
    'uses'=>'Admin\ProductController@listProduct'
]);
Route::get('admin/product/create/{id?}',[
    'as' => 'admin.product.create',
    'uses'=>'Admin\ProductController@formCreate'
]);
Route::post('admin/product/create',[
    'as' => 'admin.product.postcreate',
    'uses'=>'Admin\ProductController@create'
]);
Route::get('admin/product/delete/{id?}',[
    'as' => 'admin.product.delete',
    'uses'=>'Admin\ProductController@delete'
]);

//cart
Route::post('cart/add/{type?}',[
    'as' => 'cart.add',
    'uses' => 'CartController@addToCart'
]);
Route::get('cart/remove/{id}',[
    'as'=> 'cart.remove',
    'uses'=> 'CartController@removeItem'
]);
//Customer
Route::get('admin/customer/list',[
    'as' => 'admin.customer',
    'uses'=> 'Admin\CustomerController@listCustomer'
]);

//orders
Route::get('admin/order/list',[
    'as' => 'admin.orders.list',
    'uses'=> 'Admin\OrdersController@listOrders'
]);
Route::get('admin/order/view/{id}',[
    'as' => 'admin.orders.view',
    'uses'=> 'Admin\OrdersController@view'
]);



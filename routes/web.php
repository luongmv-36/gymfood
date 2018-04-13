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

/*******Home**************************/
Route::get('/', ['as' => 'home','uses' => 'HomeController@index']);

/******Checkout***********************/
Route::group(['prefix' => 'checkout'], function (){
    Route::get('/cart',['as' =>'checkout.cart','uses'=> 'CartController@checkout']);
    Route::post('/step2',['as' =>'checkout.step2','uses'=> 'CheckoutController@step2']);
    Route::get('/step2',['as' =>'checkout.step2','uses'=> 'CartController@checkout']);
    Route::post('/step3',['as' =>'checkout.step3','uses'=> 'CheckoutController@step3']);
    Route::get('/step3',['as' =>'checkout.step3','uses'=> 'CartController@checkout']);
    Route::post('/step4',['as' =>'checkout.step4','uses'=> 'CheckoutController@step4']);
    Route::get('/step4',['as' =>'checkout.step4','uses'=> 'CartController@checkout']);
    Route::post('/step5',['as' =>'checkout.step5','uses'=> 'CheckoutController@step5']);
    Route::post('/success',['as' =>'checkout.step6','uses'=> 'CheckoutController@step6']);
    Route::get('/success',['as' =>'checkout.step6','uses'=> 'CheckoutController@successPage']);
    Route::post('/order',['as' =>'checkout.order','uses'=> 'CheckoutController@order']);
});

/******Cart**************************/
Route::group(['prefix' => 'cart'], function (){
    Route::post('/add/{type?}',['as' => 'cart.add','uses' => 'CartController@addToCart']);
    Route::get('/remove/{id}',['as'=> 'cart.remove','uses'=> 'CartController@removeItem']);
    Route::get('/view',['as' =>'cart.view','uses'=> 'CartController@view']);
});

/******Category*********************/
Route::group(['prefix' => 'category'], function (){
    Route::get('/gird/{id?}', ['as' => 'category.productgird', 'uses' => 'CategoryController@productgird'])->where('id', '[0-9]+');
    Route::get('/list/{id?}', ['as' => 'category.productlist', 'uses' => 'CategoryController@productlist']);
});

/******Product***********************/
Route::group(['prefix' => 'product'], function () {
    Route::get('/{id}-{slug}', ['as' => 'product.view', 'uses' => 'ProductController@view']);
});

/******Customer********************/
Route::group(['prefix' => 'customer'], function (){
    Route::get('/register',['as' => 'customer.register','uses' => 'CustomerController@form_register']);
    Route::post('/register',['as' => 'customer.register','uses' => 'CustomerController@register']);
    Route::get('/login',['as' => 'customer.login','uses' => 'CustomerController@form_login']);
    Route::post('/login',['as' => 'customer.login','uses' => 'CustomerController@login']);
    Route::get('/logout',['as' => 'customer.logout','uses' => 'CustomerController@logout']);
    Route::get('/profile/{id}',['as' => 'customer.view.profile','uses' => 'CustomerController@profile']);
});

/******Search********************/
Route::group(['prefix' => 'search'], function (){
    Route::post('/{category?}',['as' => 'search','uses' => 'SearchController@search']);
    Route::get('/{category?}',['as' => 'search','uses' => 'SearchController@search']);
});

/******Comment********************/
Route::group(['prefix' => 'comment'], function () {
    Route::post('/add', ['as' => 'comment.add','uses' => 'CommentController@add']);
});

/**
 * ***********ADMIN***********************************************************************************
 */
Route::get('admin/login',[
    'as' => 'admin.login',
    'uses'=>'Admin\DashboardController@login'
]);
Route::post('admin/login',[
    'as' => 'admin.login',
    'uses'=>'Admin\DashboardController@loginPost'
]);
Route::group(['middleware' => ['admin']],function (){
    Route::group(['prefix' => 'admin'], function (){
        Route::get('/',['as' => 'admin.dashboard','uses'=>'Admin\DashboardController@dashboard']);

    //category**********************************************************
        Route::get('/category/list',['as' => 'admin.category.list','uses'=>'Admin\CategoryController@listCategory']);
        Route::get('/category/create/{id?}',['as' => 'admin.category.create','uses'=>'Admin\CategoryController@formCreate']);
        Route::post('/category/create',['as' => 'admin.category.postcreate','uses'=>'Admin\CategoryController@create']);
        Route::get('/category/delete/{id?}',['as' => 'admin.category.delete','uses'=>'Admin\CategoryController@delete']);

    //product***********************************************************
        Route::get('/product/list',['as' => 'admin.product.list','uses'=>'Admin\ProductController@listProduct']);
        Route::get('/product/create/{id?}',['as' => 'admin.product.create','uses'=>'Admin\ProductController@formCreate']);
        Route::post('/product/create',['as' => 'admin.product.postcreate','uses'=>'Admin\ProductController@create']);
        Route::get('/product/delete/{id?}',['as' => 'admin.product.delete','uses'=>'Admin\ProductController@delete']);

    //Customer**********************************************************
        Route::get('/customer/list',['as' => 'admin.customer.list','uses'=> 'Admin\CustomerController@listCustomer']);
        Route::get('/customer/create/{id?}',['as' => 'admin.customer.create','uses'=> 'Admin\CustomerController@formCreateCustomer']);
        Route::post('/customer/admin_create/',['as' => 'admin.customer.new_or_update','uses'=> 'Admin\CustomerController@createOrUpdate']);
        Route::get('/customer/admin_delete/{id?}',['as' => 'admin.customer.delete','uses'=> 'Admin\CustomerController@deleteCustomer']);

    //orders************************************************************
        Route::get('/order/list',['as' => 'admin.orders.list','uses'=> 'Admin\OrdersController@listOrders']);
        Route::get('/order/view/{id}',['as' => 'admin.orders.view','uses'=> 'Admin\OrdersController@view']);
    });
});
/**
 * *********EndAdmin****************************************************************************************
 */




<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::group(['prefix' => 'product'], function(){
    Route::get('/all','ProductController@all');
    Route::get('/{link}','ProductController@detail');
    Route::get('/all/{page}','ProductController@all');
    Route::get('/category/{category}','ProductController@category');
    Route::get('/category/{category}/{page}','ProductController@category');
});

Route::group(['prefix' => 'cart'], function(){
    Route::get('/','CartController@index');
    Route::post('/add','CartController@add');
    Route::get('/addToCart/{link}','CartController@addToCart');
    Route::post('/update/{link}','CartController@update');
    Route::get('/delete/{link}','CartController@delete');
});

Route::get('/test','CartController@test');

Route::get('/checkout',function(){
    return redirect('/cart');
});

Route::post('/checkout','CartController@checkout');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'ajax'], function(){
    Route::get('/kabupaten/{province}','AjaxController@kabupaten');
    Route::get('/cost/{city}','AjaxController@cost');
});

Route::group(['prefix' => 'member'], function () {
    Route::get('/','MemberController@index');
});

Route::group(['prefix' => 'order'], function(){
    Route::get('/','OrderController@index');
    Route::get('/{order}','OrderController@detailOrder');
    Route::get('/confirm/{order}','OrderController@confirm');
    Route::post('/confirm/{order}','OrderController@storeConfirm');
    Route::post('/terkirim/{order}','OrderController@terkirim');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('/','Admin\HomeController@index');
    Route::get('/login','Admin\AuthController@getLogin');
    Route::post('/login','Admin\AuthController@postLogin');
    Route::get('/home','Admin\HomeController@index');
    Route::get('/order','Admin\OrderController@index');
    Route::get('/order/{order}','Admin\OrderController@detail');
    Route::post('/order/{order}','Admin\OrderController@update');
    Route::get('/order/{order}/confirm','Admin\OrderController@confirm');
    Route::post('/order/{order}/confirm','Admin\OrderController@updateConfirm');
    Route::get('/member','Admin\MemberController@index');
    Route::get('/member/{member}','Admin\MemberController@detail');
});
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

Route::get('/product/{link}','ProductController@detail');

Route::get('/products','ProductController@all');

Route::get('/products/{page}','ProductController@all');

Route::get('/products/category/{category}','ProductController@category');

Route::get('/products/category/{category}/{page}','ProductController@category');

Route::get('/cart','CartController@index');

Route::get('/test','CartController@test');

Route::post('/cart/add','CartController@add');

Route::get('/cart/addToCart/{link}','CartController@addToCart');

Route::post('/cart/update/{link}','CartController@update');

Route::get('/cart/delete/{link}','CartController@delete');

Route::get('/checkout',function(){
    return redirect('/cart');
});

Route::post('/checkout','CartController@checkout');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/ajax/kabupaten/{province}','AjaxController@kabupaten');

Route::get('/ajax/cost/{city}','AjaxController@cost');

Route::get('/orders','OrderController@index');

Route::group(['prefix' => 'member'], function () {
    Route::get('/','MemberController@index');
});


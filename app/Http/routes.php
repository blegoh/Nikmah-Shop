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

Route::auth();

Route::get('/home', 'HomeController@index');

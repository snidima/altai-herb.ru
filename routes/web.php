<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');


Route::get('/shop', ['as' => 'shop', 'uses' => 'ProductController@main']);



Route::get('/shop/category/{id}', ['as' => 'applyCategory', 'uses' => 'ProductController@applyCategory']);





Route::get('/login', function(){
    return view('login');
})->name('login');



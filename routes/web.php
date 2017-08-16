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

Route::get('/', 'PublicController@home');

// Public Area



// Admin Area

$admin_uri = 'kameng';
Route::get($admin_uri . '/home', function(){
    return view('backend.home');
});


Route::get($admin_uri . '/post/json', 'PostController@json')->name('post.json');
Route::get($admin_uri . '/post/find', 'PostController@find')->name('post.find');
Route::resource($admin_uri . '/post', 'PostController');

Route::get($admin_uri . '/category/json', 'CategoryController@json')->name('category.json');
Route::get($admin_uri . '/category/find', 'CategoryController@find')->name('category.find');
Route::resource($admin_uri . '/category', 'CategoryController');

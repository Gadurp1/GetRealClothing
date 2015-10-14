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


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('/', function () {

	$blog=\App\Blog::where('status','publish')->Take(3)->latest()->get();
    	return view('home',compact('blog'));

});

// Registration routes...

Route::get('Shop', function () {
	
	return view('shop');
    
});

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::resource('blog','BlogController');


// Blog routes...
Route::post('blog/{id}/photo','BlogController@addPhoto');      // Adding Photos to post
Route::post('blog/create','BlogController@store');
Route::get('/Recent-Posts', function () {                      // Blog Feed Page

	$blog=\App\Blog::latest()->get();
    	return view('blog.list',compact('blog'));

});

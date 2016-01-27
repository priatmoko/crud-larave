<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
	//Route::resource('books', 'BookController');
	
	Route::get('/','BookController@index');
	Route::get('books', 'BookController@index');
	Route::get('books/{books}/edit', 'BookController@edit');
	Route::post('books/{books}/edit', 'BookController@update');
	Route::get('books/{books}/delete', 'BookController@destroy');
	Route::post('books/store', 'BookController@store');
	Route::get('books/create', 'BookController@create');
	
});


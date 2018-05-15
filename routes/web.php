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

/**
*	Display the list of accounts
*/
// Route::get('/', 'HomeController@index');


/**
*
*	Index - display list of accounts
*	Create - create new account ( similar to register )
*	edit - edit existing accounts
*	delete - remove account
*
*/	

Route::post('register', 'RegistersController@register');

Route::get('register', function () {return view('home'); });

Route::get('/', 'AccountsController@index');
Route::get('account/{id}/delete', 'AccountsController@destroy');

Route::resource('account', 'AccountsController');

Route::get('post', 'PostController@index'); 

Route::get('post/create', 'PostController@create'); 

Route::post('post/create', 'PostController@store'); 

Route::get('post/{id}/edit', 'PostController@edit');

Route::put('post/{id}', 'PostController@update');

Route::delete('post/{id}', 'PostController@destroy');

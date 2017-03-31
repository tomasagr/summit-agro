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

Route::get('/', 'HomeController@index')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');

Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function() {
	Route::get('/', 'AdminPagesController@panel');

	Route::resource('users', 'UserController');
	Route::get('users/{id}/delete', 'UserController@destroy');

	Route::resource('products', 'ProductController');
	Route::get('products/{id}/delete', 'ProductController@destroy');

	Route::resource('awards', 'AwardController');
		Route::get('awards/{id}/delete', 'AwardController@destroy');

	Route::resource('solicitudes', 'SolicitudeController');
	Route::resource('levels', 'LevelsController');
});

Auth::routes();


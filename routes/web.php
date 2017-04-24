<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

use App\Levels;
use App\User;


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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');

Route::get('/logout', 'Auth\LoginController@logout')->middleware(['auth']);
Route::get('/levels/awards', 'LevelAwardsController@index');
Route::post('/users', 'UserSiteController@store');

	Route::get('/avatar-hombre/{id}', function() {
		return view('avatar/hombre');
	});

		Route::get('/avatar-mujer/{id}', function() {
		return view('avatar/mujer');
	});

	Route::get('/avatar/{name}/translate', 'AvatarsController@translate');


Route::group(['middleware' => 'auth'] , function() {
	Route::get('invoices', 'SolicitudeController@index');
	Route::get('awards', 'AwardSolicitudeController@index');
	Route::get('/user/{userId}/awards/{awardId}', 'AwardSolicitudeController@store');

	Route::get('/users/{id}/show', 'UserSiteController@show');

	Route::get('/intro-2', function() {
		return view('intros/intro-2');
	});

	Route::get('/levels', function() {
		return view('levels/index');
	});



	Route::get('/profile', function() {
		$levels = Levels::with('awards')->get();
		$users = User::all();

		return view('profile/index', compact('levels', 'users'));
	});
});

Route::group(['prefix' => 'panel', 'middleware' => ['auth', 'isAdmin']], function() {
	Route::get('/', 'AdminPagesController@panel');

	Route::resource('users', 'UserController');
	Route::get('users/{id}/delete', 'UserController@destroy');

	Route::resource('products', 'ProductController');
	Route::get('products/{id}/delete', 'ProductController@destroy');

	Route::resource('awards', 'AwardController');
	Route::get('awards/{id}/delete', 'AwardController@destroy');

	Route::resource('solicitudes', 'SolicitudeController');

	Route::resource('levels', 'LevelsController');

	Route::resource('cupons', 'CuponsController');
	Route::get('cupons/{id}/delete', 'CuponsController@destroy');
});

Auth::routes();


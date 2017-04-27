<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::delete('panel/awards/{id}/image', 'DeleteImageAwardController@destroy');
Route::get('products', 'ApiProductsController@index');
Route::get('cupons', 'ApiCuponsController@index');

Route::post('/user/{id}/solicitude', 'SolicitudeController@store');

Route::post('/avatar', 'AvatarsController@store');

Route::get('/agronomia/check', 'AgronomiaController@show');

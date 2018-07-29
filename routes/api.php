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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Custom Routes with overridden methods for api token
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');

//Authentication check
Route::group(['middleware' => 'auth:api'], function() {
	Route::post('logout', 'Auth\LoginController@logout');
	//Product CRUD API Routes
	Route::resource('products', 'Api\\ProductsController', ['except' => ['create', 'edit']]);
	Route::get('productsearch/{searchterm}', 'Api\\ProductsController@productsearch');
});

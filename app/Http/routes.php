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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

# social auth
Route::get('users/login/social', 'Auth\SocialyseController@login');
Route::get('users/login/social/failed', 'Auth\SocialyseController@abort');

# test
Route::get('errors/503', function ()
{
	return view('errors.503');
});

# rest api
Route::group(['prefix' => 'api'], function ()
{
	Route::resource('users', 'Api\UsersController'); # add to Genesis4Laravel

	Route::resource('categories', 'Api\CategoriesController');
	Route::resource('products', 'Api\ProductsController');
	Route::resource('tags', 'Api\TagsController');
	Route::resource('menus', 'Api\MenusController');

	Route::resource('customers', 'Api\CustomersController');
	Route::resource('suppliers', 'Api\SuppliersController');

	Route::resource('sales', 'Api\SalesController');
	Route::resource('purchases', 'Api\PurchasesController');
	Route::resource('receipts', 'Api\ReceiptsController');

	Route::resource('stocks', 'Api\StocksController');
});

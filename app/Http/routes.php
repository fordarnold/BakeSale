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

# public urls
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
Route::get('test', function ()
{
	return Bakesale\Services\TableService::isEnabled();
});

# admin back-end
Route::group(['prefix' => 'backroom'], function ()
{
	// administrator backend routes go here
	Route::get('/', 'Backroom\WelcomeController@index');
});

# user front-end
Route::group(['prefix' => 'webstore'], function ()
{
	// logged-in-user front-end routes go here
	Route::get('/', 'Webstore\WelcomeController@index');

	Route::resource('categories', 'Webstore\CategoriesController');
	Route::get('categories/suggest', 'Webstore\CategoriesController@suggest');

	Route::resource('tags', 'Webstore\TagsController');
	Route::get('tags/suggest', 'Webstore\TagsController@suggest');
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

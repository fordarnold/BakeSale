<?php namespace Bakesale\Http\Controllers;

use Illuminate\Http\Request;

class BackroomController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| The Backroom Controller
	|--------------------------------------------------------------------------
	| 
	| The 'Backroom' is the backend administrator user interface.
	| This controller checks to see if requests are coming from an admin user,
	| and so much more.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Example function
	 * 
	 * @return Request Get the incoming HTTP request
	 */
	public function request(Request $request)
	{
		return $request;
	}

}

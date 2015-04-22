<?php namespace Bakesale\Http\Controllers;

use Carbon\Carbon;

class BackroomController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| The Backroom Controller
	|--------------------------------------------------------------------------
	| 
	| The 'Backroom' is the backend user interface for administrators.
	|
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
	 * Test function
	 * 
	 * @return DateTime
	 */
	public function date()
	{
		return Carbon::now();
	}

}

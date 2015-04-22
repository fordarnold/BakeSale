<?php namespace Bakesale\Http\Controllers;

class KremlinController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| The Kremlin Controller
	|--------------------------------------------------------------------------
	| 
	| The 'Kremlin' is the backend user interface for system administrators.
	| This controller primarily checks to see if requests are coming from
	| a sysadmin user, and so much more.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth.sysadmin');
	}

}

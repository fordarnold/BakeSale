<?php namespace Bakesale\Http\Controllers;

class BackroomController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| The Backroom Controller
	|--------------------------------------------------------------------------
	| 
	| The 'Backroom' is the backend administrator user interface.
	| This controller checks to see if requests are coming from an admin user.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}

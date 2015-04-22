<?php namespace Bakesale\Http\Controllers\Backroom;

use Bakesale\Http\Controllers\BackroomController;

class WelcomeController extends BackroomController {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('backroom.home');
	}

}

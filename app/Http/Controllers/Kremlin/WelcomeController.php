<?php namespace Bakesale\Http\Controllers\Kremlin;

use Bakesale\Http\Controllers\KremlinController;

class WelcomeController extends KremlinController {

	/**
	 * Show the kremlin welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('kremlin.home');
	}

}

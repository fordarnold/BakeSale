<?php namespace Bakesale\Http\Controllers\Webstore;

use Bakesale\Http\Controllers\WebstoreController;

class WelcomeController extends WebstoreController {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('webstore.home');
	}

}

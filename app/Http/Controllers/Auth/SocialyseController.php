<?php namespace Bakesale\Http\Controllers\Auth;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Bakesale\SocialAuth as SocialAuth;

class SocialyseController extends Controller {

	/**
	 * Login with social network.
	 *
	 * @return Response
	 */
	public function login(SocialAuth $authenticateUser, Request $request)
	{
		// # check for 'code' url param
		// if (\Input::has('code')) {
		// 	return \Input::get('code');
		// }

		// # redirect to oauth server if no code
		// return \Socialize::with('facebook')->redirect();
		// 
		return $authenticateUser->execute($request->has('code'));
	}

	/**
	 * Login failed.
	 *
	 * @return Response
	 */
	public function abort()
	{
		//
	}

}

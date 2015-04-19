<?php namespace Bakesale\Http\Controllers\Auth;

use Bakesale\Http\Requests;
use Bakesale\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bakesale\Services\Socialauth as SocialAuth;

class SocialyseController extends Controller {

	/**
	 * Login with social network.
	 *
	 * @return Response
	 */
	public function login(SocialAuth $authenticateUser, Request $request)
	{
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

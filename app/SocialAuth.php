<?php namespace Bakesale;

use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Contracts\Auth\Guard as Guard;
use Bakesale\Repositories\UserRepo as UserRepo;

class SocialAuth {

	private $users;
	private $socialite;
	private $auth;

	public function __construct(UserRepo $users, Socialite $socialite, Guard $auth) {
		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;
	}

	public function execute($hasCode)
	{
		if (! $hasCode)
			return $this->getAuthorization();

		$user = $this->socialite->driver('facebook')->user();
		dd(['message' => 'Use this user data returned to create a new user', 'user_info' => $user]);
	}

	private function getAuthorization()
	{
		return $this->socialite->driver('facebook')->redirect();
	}

}
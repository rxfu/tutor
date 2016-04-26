<?php

namespace Tis\Account\Services;

use Illuminate\Support\Facades\Auth;
use Tis\Account\Entities\User;
use Tis\Account\Repositories\UserRepository;

class UserService {

	protected $users;

	public function __construct(UserRepository $users) {
		$this->users = $users;
	}

	public function changePassword(User $user, $oldPassword, $newPassword) {
		$credentials = [
			'username' => $user->username,
			'password' => $oldPassword,
		];

		if (Auth::guard()->validate($credentials)) {
			$user->password = bcrypt($newPassword);

			return $user->save();
		}

		return false;
	}
}
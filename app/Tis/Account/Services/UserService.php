<?php

namespace Tis\Account\Services;

use Illuminate\Support\Facades\Auth;
use Tis\Account\Entities\User;

class UserService {

	public function changePassword(User $user, $oldPassword, $newPassword) {
		$credentials = [
			'username' => $user->username,
			'password' => $oldPassword,
		];

		if (Auth::attempt($credentials)) {
			$user->password = bcrypt($newPassword);

			return $user->save();
		}

		return false;
	}
}
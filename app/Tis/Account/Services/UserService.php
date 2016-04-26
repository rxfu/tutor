<?php

namespace Tis\Account\Services;

use Tis\Account\Repositories\UserRepository;

class UserService {

	protected $users;

	public function __construct(UserRepository $users) {
		$this->users = $users;
	}

	public function changePassword(User $user, $oldPassword, $newPassword) {
		if ($user instanceof User) {
			if ($this->users->exists($user->username, $oldPassword)) {
				$user->password = $newPassword;

				return $user->save();
			}
		}

		return false;
	}
}
<?php

namespace Tis\Account\Repositories;

use Tis\Account\Entities\User;

class UserRepository {

	protected $user;

	public function __construct(User $user) {
		$this->user = $user;
	}

}
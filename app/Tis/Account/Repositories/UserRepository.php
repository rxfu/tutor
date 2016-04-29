<?php

namespace Tis\Account\Repositories;

use Tis\Account\Entities\User;
use Tis\Core\Repository;

class UserRepository extends Repository {

	public function __construct(User $user) {
		$this->object = $user;
	}
}
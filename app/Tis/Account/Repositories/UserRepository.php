<?php

namespace Tis\Account\Repositories;

use Tis\Account\Entities\User;
use Tis\Core\Repository;

class UserRepository extends Repository {

	public function __construct(User $user) {
		$this->object = $user;
	}

	public function store($data) {
		$data['password'] = bcrypt(config('constants.default_password'));

		return parent::store($data);
	}
}
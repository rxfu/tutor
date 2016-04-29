<?php

namespace Tis\Account\Repositories;

use Tis\Account\Entities\Role;
use Tis\Core\Repository;

class RoleRepository extends Repository {

	public function __construct(Role $role) {
		$this->object = $role;
	}
}
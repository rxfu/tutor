<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Gender;

class GenderRepository extends Repository {

	public function __construct(Gender $gender) {
		$this->object = $gender;
	}
}
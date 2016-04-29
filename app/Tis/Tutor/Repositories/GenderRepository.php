<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Gender;
use Tis\Core\Repository;

class GenderRepository extends Repository {

	public function __construct(Gender $gender) {
		$this->object = $gender;
	}
}
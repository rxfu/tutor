<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\College;

class CollegeRepository extends Repository {

	public function __construct(College $college) {
		$this->object = $college;
	}
}
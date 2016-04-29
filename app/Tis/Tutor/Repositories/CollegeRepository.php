<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\College;
use Tis\Core\Repository;

class CollegeRepository extends Repository {

	public function __construct(College $college) {
		$this->object = $college;
	}
}
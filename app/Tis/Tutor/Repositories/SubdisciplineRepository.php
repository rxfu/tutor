<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Subdiscipline;

class SubdisciplineRepository extends Repository {

	public function __construct(Subdiscipline $subdiscipline) {
		$this->object = $subdiscipline;
	}
}
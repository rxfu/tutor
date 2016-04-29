<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Subdiscipline;
use Tis\Core\Repository;

class SubdisciplineRepository extends Repository {

	public function __construct(Subdiscipline $subdiscipline) {
		$this->object = $subdiscipline;
	}
}
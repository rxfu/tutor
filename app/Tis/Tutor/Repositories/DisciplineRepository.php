<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Discipline;
use Tis\Core\Repository;

class DisciplineRepository extends Repository {

	public function __construct(Discipline $discipline) {
		$this->object = $discipline;
	}
}
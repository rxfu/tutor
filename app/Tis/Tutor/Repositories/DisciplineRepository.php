<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Discipline;

class DisciplineRepository extends Repository {

	public function __construct(Discipline $discipline) {
		$this->object = $discipline;
	}

	public function getAllByPMD() {
		return $this->object->whereSfzyxw(config('constants.enable'))
			->orderBy($this->object->getKeyName())
			->get();
	}
}
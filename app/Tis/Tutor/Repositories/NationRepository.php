<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Nation;

class NationRepository extends Repository {

	public function __construct(Nation $nation) {
		$this->object = $nation;
	}
}
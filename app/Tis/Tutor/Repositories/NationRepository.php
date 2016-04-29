<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Nation;
use Tis\Core\Repository;

class NationRepository extends Repository {

	public function __construct(Nation $nation) {
		$this->object = $nation;
	}
}
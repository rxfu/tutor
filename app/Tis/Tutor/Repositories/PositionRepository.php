<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Position;

class PositionRepository extends Repository {

	public function __construct(Position $position) {
		$this->object = $position;
	}
}
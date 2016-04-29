<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Position;
use Tis\Core\Repository;

class PositionRepository extends Repository {

	public function __construct(Position $position) {
		$this->object = $position;
	}
}
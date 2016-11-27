<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Selection;
use Tis\Tutor\Entities\Tutor;

class SelectionRepository extends Repository {

	public function __construct(Selection $selection) {
		$this->object = $selection;
	}
}
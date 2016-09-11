<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Expert;

class ExpertRepository extends Repository {

	public function __construct(Expert $expert) {
		$this->object = $expert;
	}
}
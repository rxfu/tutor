<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Tutor;

class TutorRepository extends Repository {

	public function __construct(Tutor $tutor) {
		$this->object = $tutor;
	}
}
<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Gender;

class GenderRepository {

	protected $gender;

	public function __construct(Gender $gender) {
		$this->gender = $gender;
	}

	public function getAll() {
		return $this->gender->orderBy('xbdm')
			->get()
			->toArray();
	}
}
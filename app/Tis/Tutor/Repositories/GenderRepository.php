<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Gender;

class GenderRepository {

	protected $gender;

	public function __construct(Gender $gender) {
		$this->gender = $gender;
	}

	public function getAttributes() {
		return $this->gender->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->gender->getTable());
	}

	public function getAll() {
		return $this->gender->orderBy('xbdm')->get();
	}

	public function getGender($id) {
		return $this->gender->find($id);
	}

	public function save($data) {
		$this->gender->fill($data);

		return $this->gender->save();
	}
}
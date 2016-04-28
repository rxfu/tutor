<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Nation;

class NationRepository {

	protected $nation;

	public function __construct(Nation $nation) {
		$this->nation = $nation;
	}

	public function getAttributes() {
		return $this->nation->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->nation->getTable());
	}

	public function getAll() {
		return $this->nation->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->nation->find($id);
	}

	public function store($data) {
		$this->nation->fill($data);

		return $this->nation->save();
	}

	public function update($id, $data) {
		$nation = $this->nation->findOrFail($id);
		$nation->fill($data);

		return $nation->save();
	}

	public function delete($id) {
		$nation = $this->nation->findOrFail($id);

		return $nation->delete();
	}
}
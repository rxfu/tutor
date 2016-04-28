<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Discipline;

class DisciplineRepository {

	protected $discipline;

	public function __construct(Discipline $discipline) {
		$this->discipline = $discipline;
	}

	public function getAttributes() {
		return $this->discipline->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->discipline->getTable());
	}

	public function getAll() {
		return $this->discipline->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->discipline->find($id);
	}

	public function store($data) {
		$this->discipline->fill($data);

		return $this->discipline->save();
	}

	public function update($id, $data) {
		$discipline = $this->discipline->findOrFail($id);
		$discipline->fill($data);

		return $discipline->save();
	}

	public function delete($id) {
		$discipline = $this->discipline->findOrFail($id);

		return $discipline->delete();
	}
}
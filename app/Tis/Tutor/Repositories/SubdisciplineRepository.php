<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Subsubdiscipline;

class SubsubdisciplineRepository {

	protected $subdiscipline;

	public function __construct(Subsubdiscipline $subdiscipline) {
		$this->subdiscipline = $subdiscipline;
	}

	public function getAttributes() {
		return $this->subdiscipline->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->subdiscipline->getTable());
	}

	public function getAll() {
		return $this->subdiscipline->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->subdiscipline->find($id);
	}

	public function store($data) {
		$this->subdiscipline->fill($data);

		return $this->subdiscipline->save();
	}

	public function update($id, $data) {
		$subdiscipline = $this->subdiscipline->findOrFail($id);
		$subdiscipline->fill($data);

		return $subdiscipline->save();
	}

	public function delete($id) {
		$subdiscipline = $this->subdiscipline->findOrFail($id);

		return $subdiscipline->delete();
	}
}
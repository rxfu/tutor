<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Position;

class PositionRepository {

	protected $position;

	public function __construct(Position $position) {
		$this->position = $position;
	}

	public function getAttributes() {
		return $this->position->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->position->getTable());
	}

	public function getAll() {
		return $this->position->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->position->find($id);
	}

	public function store($data) {
		$this->position->fill($data);

		return $this->position->save();
	}

	public function update($id, $data) {
		$position = $this->position->findOrFail($id);
		$position->fill($data);

		return $position->save();
	}

	public function delete($id) {
		$position = $this->position->findOrFail($id);

		return $position->delete();
	}
}
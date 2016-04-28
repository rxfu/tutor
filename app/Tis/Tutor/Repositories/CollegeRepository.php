<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\College;

class CollegeRepository {

	protected $college;

	public function __construct(College $college) {
		$this->college = $college;
	}

	public function getAttributes() {
		return $this->college->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->college->getTable());
	}

	public function getAll() {
		return $this->college->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->college->find($id);
	}

	public function store($data) {
		$this->college->fill($data);

		return $this->college->save();
	}

	public function update($id, $data) {
		$college = $this->college->findOrFail($id);
		$college->fill($data);

		return $college->save();
	}

	public function delete($id) {
		$college = $this->college->findOrFail($id);

		return $college->delete();
	}
}
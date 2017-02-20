<?php

namespace Tis\Core;

abstract class Repository {

	protected $object;

	public function __construct($object = null) {
		$this->object = $object;
	}

	public function getTable() {
		return $this->object->getTable();
	}

	public function getAttributes() {
		return $this->object->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->object->getTable());
	}

	public function getAll() {
		return $this->object->orderBy($this->object->getKeyName())->get();
	}

	public function get($id) {
		return $this->object->findOrFail($id);
	}

	public function create($data) {
		return $this->object->create($data);
	}

	public function store($data) {
		$this->object->fill($data);

		return $this->object->save();
	}

	public function update($id, $data) {
		$object = $this->object->findOrFail($id);
		$object->fill($data);

		return $object->save();
	}

	public function delete($id) {
		$object = $this->object->findOrFail($id);

		return $object->delete();
	}

	public function exists($id) {
		return $this->object->where($this->object->getKeyname(), '=', $id)->exists();
	}

	public function getId() {
		return $this->object->id;
	}
}
<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Country;

class CountryRepository {

	protected $country;

	public function __construct(Country $country) {
		$this->country = $country;
	}

	public function getAttributes() {
		return $this->country->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->country->getTable());
	}

	public function getAll() {
		return $this->country->orderBy('xbdm')->get();
	}

	public function get($id) {
		return $this->country->find($id);
	}

	public function store($data) {
		$this->country->fill($data);

		return $this->country->save();
	}

	public function update($id, $data) {
		$country = $this->country->findOrFail($id);
		$country->fill($data);

		return $country->save();
	}

	public function delete($id) {
		$country = $this->country->findOrFail($id);

		return $country->delete();
	}
}
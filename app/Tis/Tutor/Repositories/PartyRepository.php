<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Party;

class PartyRepository {

	protected $party;

	public function __construct(Party $party) {
		$this->party = $party;
	}

	public function getAttributes() {
		return $this->party->getConnection()
			->getSchemaBuilder()
			->getColumnListing($this->party->getTable());
	}

	public function getAll() {
		return $this->party->orderBy('dm')->get();
	}

	public function get($id) {
		return $this->party->find($id);
	}

	public function store($data) {
		$this->party->fill($data);

		return $this->party->save();
	}

	public function update($id, $data) {
		$party = $this->party->findOrFail($id);
		$party->fill($data);

		return $party->save();
	}

	public function delete($id) {
		$party = $this->party->findOrFail($id);

		return $party->delete();
	}
}
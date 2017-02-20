<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Result;

class ResultRepository extends Repository {

	public function __construct(Result $result) {
		$this->object = $result;
	}

	public function store($data) {
		$saved = false;

		foreach ($data['item'] as $k => $v) {
			$saved = parent::create($v);
		}

		return $saved;
	}

	public function getAllById($id) {
		return $this->object->whereZjhm($id)->get();
	}

	public function update($id, $data) {
		$saved = false;

		foreach ($data['item'] as $k => $v) {
			$saved = parent::update($v['id'], $v);
		}

		return $saved;
	}

}

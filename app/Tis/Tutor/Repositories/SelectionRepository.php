<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Discipline;
use Tis\Tutor\Entities\Selection;
use Tis\Tutor\Entities\Subdiscipline;
use Tis\Tutor\Entities\Tutor;

class SelectionRepository extends Repository {

	public function __construct(Selection $selection) {
		$this->object = $selection;
	}

	public function store($data) {
		$discipline     = Discipline::find($data['yjxkdm']);
		$data['yjxkmc'] = $discipline->mc;
		$subdiscipline  = Subdiscipline::find($data['ejxkdm']);
		$data['ejxkmc'] = $subdiscipline->mc;

		return parent::store($data);
	}

	public function getAllById($id) {
		return $this->object->whereZjhm($id)->get();
	}

	public function getAllByCollege($college) {
		return $this->object->with(['tutor' => function ($query) use ($college) {
			$query->whereSzbm($college);
		}])->orderBy('id')->get();
	}
}
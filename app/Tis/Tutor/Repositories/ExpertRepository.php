<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Discipline;
use Tis\Tutor\Entities\Expert;
use Tis\Tutor\Entities\Subdiscipline;
use Tis\Tutor\Entities\Tutor;

class ExpertRepository extends Repository {

	public function __construct(Expert $expert) {
		$this->object = $expert;
	}

	public function store($data) {
		$discipline     = Discipline::find($data['yjxkm']);
		$data['yjxkmc'] = $discipline->mc;
		$subdiscipline  = Subdiscipline::find($data['ejxkm']);
		$data['ejxkmc'] = $subdiscipline->mc;
		$data['sfzdsk'] = Tutor::whereZjhm($data['sfzh'])->exists();
		$data['sftj']   = config('constants.disable');

		return parent::store($data);
	}

	public function update($id, $data) {
		$tutor = $this->object->findOrFail($id);
		$tutor->fill($data);

		return $tutor->save();
	}
}
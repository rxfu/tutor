<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Discipline;
use Tis\Tutor\Entities\Subdiscipline;
use Tis\Tutor\Entities\Tutor;

class TutorRepository extends Repository {

	public function __construct(Tutor $tutor) {
		$this->object = $tutor;
	}

	public function store($data) {
		$discipline     = Discipline::find($data['yjxkdm']);
		$data['yjxkmc'] = $discipline->mc;
		$subdiscipline  = Subdiscipline::find($data['ejxkdm']);
		$data['ejxkmc'] = $subdiscipline->mc;

		return parent::store($data);
	}

	public function getTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		return $this->object->whereZjhm($zjhm)
			->whereDslb($dslb)
			->whereDsdl($dsdl)
			->whereEjxkdm($ejxkdm)
			->whereSfjzds($sfjzds)
			->firstOrFail();
	}
}
<?php

namespace Tis\Tutor\Repositories;

use Illuminate\Support\Facades\DB;
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
		$data['sqny']   = date('Ym');
		$data['sftj']   = config('constants.enable');

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

	public function updateTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds, $data) {
		$data = array_except($data, ['_method', '_token']);

		return DB::table('y_ds_dsxx')->whereZjhm($zjhm)
			->whereDslb($dslb)
			->whereDsdl($dsdl)
			->whereEjxkdm($ejxkdm)
			->whereSfjzds($sfjzds)
			->update($data);
	}

	public function deleteTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		return DB::table('y_ds_dsxx')->whereZjhm($zjhm)
			->whereDslb($dslb)
			->whereDsdl($dsdl)
			->whereEjxkdm($ejxkdm)
			->whereSfjzds($sfjzds)
			->delete();
	}

	public function getAll() {
		return $this->object->with('college', 'subdiscipline')->orderBy('zjhm')->get();
	}

	public function getTutorsByAppdate() {
		return $this->object->orderBy('sqny', 'desc')->get();
	}

	public function getAllByCollege($college) {
		return $this->object->with('college', 'subdiscipline')->whereSzbm($college)->orderBy('zjhm')->get();
	}

	public function getTutorById($id) {
		return $this->object->whereZjhm($id)->first();
	}
}
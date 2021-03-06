<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\College;
use Tis\Tutor\Entities\Discipline;
use Tis\Tutor\Entities\Expert;
use Tis\Tutor\Entities\Subdiscipline;
use Tis\Tutor\Entities\Tutor;

class ExpertRepository extends Repository {

	public function __construct(Expert $expert) {
		$this->object = $expert;
	}

	public function store($data) {
		$discipline      = Discipline::find($data['yjxkm']);
		$data['yjxkmc']  = $discipline->mc;
		$subdiscipline   = Subdiscipline::find($data['ejxkm']);
		$data['ejxkmc']  = is_object($subdiscipline) ? $subdiscipline->mc : '';
		$discipline      = Discipline::find($data['yjxkm2']);
		$data['yjxkmc2'] = is_object($discipline) ? $discipline->mc : '';
		if (isset($data['ejxkm2'])) {
			$subdiscipline   = Subdiscipline::find($data['ejxkm2']);
			$data['ejxkmc2'] = is_object($subdiscipline) ? $subdiscipline->mc : '';
		}
		$discipline    = Discipline::find($data['mldm1']);
		$data['mlmc1'] = is_object($discipline) ? $discipline->mc : '';
		if (isset($data['lydm1'])) {
			$subdiscipline = Subdiscipline::find($data['lydm1']);
			$data['lymc1'] = is_object($subdiscipline) ? $subdiscipline->mc : '';
		}
		if (isset($data['xydm'])) {
			$college      = College::find($data['xydm']);
			$data['szbm'] = is_object($college) ? $college->mc : '';
		} elseif (isset($data['szbm'])) {
			$college      = College::whereMc($data['szbm'])->first();
			$data['xydm'] = is_object($college) ? $college->dm : '';
		}
		$data['sftj'] = config('constants.disable');

		return parent::store($data);
	}

	public function update($id, $data) {
		$tutor           = $this->object->findOrFail($id);
		$discipline      = Discipline::find($data['yjxkm']);
		$data['yjxkmc']  = $discipline->mc;
		$subdiscipline   = Subdiscipline::find($data['ejxkm']);
		$data['ejxkmc']  = is_object($subdiscipline) ? $subdiscipline->mc : '';
		$discipline      = Discipline::find($data['yjxkm2']);
		$data['yjxkmc2'] = is_object($discipline) ? $discipline->mc : '';
		if (isset($data['ejxkm2'])) {
			$subdiscipline   = Subdiscipline::find($data['ejxkm2']);
			$data['ejxkmc2'] = is_object($subdiscipline) ? $subdiscipline->mc : '';
		}
		$discipline    = Discipline::find($data['mldm1']);
		$data['mlmc1'] = is_object($discipline) ? $discipline->mc : '';
		if (isset($data['lydm1'])) {
			$subdiscipline = Subdiscipline::find($data['lydm1']);
			$data['lymc1'] = is_object($subdiscipline) ? $subdiscipline->mc : '';
		}
		if (isset($data['xydm'])) {
			$college      = College::find($data['xydm']);
			$data['szbm'] = is_object($college) ? $college->mc : '';
		} elseif (isset($data['szbm'])) {
			$college      = College::whereMc($data['szbm'])->first();
			$data['xydm'] = is_object($college) ? $college->dm : '';
		}
		$tutor->fill($data);

		return $tutor->save();
	}

	public function getAll() {
		return $this->object->orderByRaw('CONVERT(zjxm USING gbk)')->get();
	}

	public function getAllByCollege($college) {
		return $this->object->whereXydm($college)->orderByRaw('CONVERT(zjxm USING gbk)')->get();
	}
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveGenderRequest;
use Tis\Tutor\Repositories\CollegeRepository;
use Tis\Tutor\Repositories\CountryRepository;
use Tis\Tutor\Repositories\DisciplineRepository;
use Tis\Tutor\Repositories\GenderRepository;
use Tis\Tutor\Repositories\NationRepository;
use Tis\Tutor\Repositories\PartyRepository;
use Tis\Tutor\Repositories\PositionRepository;

class MetadataController extends Controller {

	protected $genders;

	protected $countries;

	protected $nations;

	protected $parties;

	public function __construct(
		GenderRepository $genders,
		CountryRepository $countries,
		NationRepository $nations,
		PartyRepository $parties
		CollegeRepository $colleges,
		PositionRepository $positions,
		DisciplineRepository $disciplines,
		SubdisciplineRepository $subdisciplines) {
		$this->genders        = $genders;
		$this->countries      = $countries;
		$this->nations        = $nations;
		$this->parties        = $parties;
		$this->colleges       = $colleges;
		$this->positions      = $positions;
		$this->disciplines    = $disciplines;
		$this->subdisciplines = $subdisciplines;
	}

	public function getGenders() {
		$attributes = $this->genders->getAttributes();
		$items      = $this->genders->getAll();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.list', compact('title', 'type', 'columns', 'attributes', 'items'));
	}

	public function showGender($id) {
		$object     = $this->genders->get($id);
		$attributes = $this->genders->getAttributes();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createGender() {
		$attributes = $this->genders->getAttributes();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeGender(SaveGenderRequest $request) {
		if ($this->genders->store($request->all())) {
			return redirect()->route('metadata.gender.list')->withSuccess('添加性别成功！');
		} else {
			return back()->withInput()->withError('添加性别失败');
		}
	}

	public function editGender($id) {
		$object     = $this->genders->get($id);
		$attributes = $this->genders->getAttributes();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.edit', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function updateGender(SaveGenderRequest $request, $id) {
		if ($this->genders->update($id, $request->all())) {
			return redirect()->route('metadata.gender.list')->withSuccess('更新性别成功！');
		} else {
			return back()->withInput()->withError('更新性别失败');
		}
	}

	public function deleteGender($id) {
		if ($this->genders->delete($id)) {
			return redirect()->route('metadata.gender.list')->withSuccess('删除性别成功！');
		} else {
			return back()->withInput()->withError('删除性别失败');
		}
	}

	public function getCountries() {
		$attributes = $this->countries->getAttributes();
		$items      = $this->countries->getAll();
		$type       = 'country';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.list', compact('title', 'type', 'columns', 'attributes', 'items'));
	}

	public function showCountry($id) {
		$object     = $this->countries->get($id);
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createCountry() {
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeCountry(SaveCountryRequest $request) {
		if ($this->countries->store($request->all())) {
			return redirect()->route('metadata.country.list')->withSuccess('添加国籍成功！');
		} else {
			return back()->withInput()->withError('添加国籍失败');
		}
	}

	public function editCountry($id) {
		$object     = $this->countries->get($id);
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.edit', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function updateCountry(SaveCountryRequest $request, $id) {
		if ($this->countries->update($id, $request->all())) {
			return redirect()->route('metadata.country.list')->withSuccess('更新国籍成功！');
		} else {
			return back()->withInput()->withError('更新国籍失败');
		}
	}

	public function deleteCountry($id) {
		if ($this->countries->delete($id)) {
			return redirect()->route('metadata.country.list')->withSuccess('删除国籍成功！');
		} else {
			return back()->withInput()->withError('删除国籍失败');
		}
	}

	public function getNations() {
		$attributes = $this->nations->getAttributes();
		$items      = $this->nations->getAll();
		$type       = 'nation';
		$title      = '民族';
		$columns    = ['代码', '名称'];

		return view('meta.list', compact('title', 'type', 'columns', 'attributes', 'items'));
	}

	public function showNation($id) {
		$object     = $this->nations->get($id);
		$attributes = $this->nations->getAttributes();
		$type       = 'nation';
		$title      = '民族';
		$columns    = ['代码', '名称'];

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createNation() {
		$attributes = $this->nations->getAttributes();
		$type       = 'nation';
		$title      = '民族';
		$columns    = ['代码', '名称'];

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeNation(SaveNationRequest $request) {
		if ($this->nations->store($request->all())) {
			return redirect()->route('metadata.nation.list')->withSuccess('添加民族成功！');
		} else {
			return back()->withInput()->withError('添加民族失败');
		}
	}

	public function editNation($id) {
		$object     = $this->nations->get($id);
		$attributes = $this->nations->getAttributes();
		$type       = 'nation';
		$title      = '民族';
		$columns    = ['代码', '名称'];

		return view('meta.edit', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function updateNation(SaveNationRequest $request, $id) {
		if ($this->nations->update($id, $request->all())) {
			return redirect()->route('metadata.nation.list')->withSuccess('更新民族成功！');
		} else {
			return back()->withInput()->withError('更新民族失败');
		}
	}

	public function deleteNation($id) {
		if ($this->nations->delete($id)) {
			return redirect()->route('metadata.nation.list')->withSuccess('删除民族成功！');
		} else {
			return back()->withInput()->withError('删除民族失败');
		}
	}

	public function getParties() {
		$attributes = $this->parties->getAttributes();
		$items      = $this->parties->getAll();
		$type       = 'party';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.list', compact('title', 'type', 'columns', 'attributes', 'items'));
	}

	public function showParty($id) {
		$object     = $this->parties->get($id);
		$attributes = $this->parties->getAttributes();
		$type       = 'party';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createParty() {
		$attributes = $this->parties->getAttributes();
		$type       = 'party';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeParty(SavePartyRequest $request) {
		if ($this->parties->store($request->all())) {
			return redirect()->route('metadata.party.list')->withSuccess('添加国籍成功！');
		} else {
			return back()->withInput()->withError('添加国籍失败');
		}
	}

	public function editParty($id) {
		$object     = $this->parties->get($id);
		$attributes = $this->parties->getAttributes();
		$type       = 'party';
		$title      = '国籍';
		$columns    = ['代码', '名称'];

		return view('meta.edit', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function updateParty(SavePartyRequest $request, $id) {
		if ($this->parties->update($id, $request->all())) {
			return redirect()->route('metadata.party.list')->withSuccess('更新国籍成功！');
		} else {
			return back()->withInput()->withError('更新国籍失败');
		}
	}

	public function deleteParty($id) {
		if ($this->parties->delete($id)) {
			return redirect()->route('metadata.party.list')->withSuccess('删除国籍成功！');
		} else {
			return back()->withInput()->withError('删除国籍失败');
		}
	}

}

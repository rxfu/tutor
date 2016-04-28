<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveGenderRequest;
use Tis\Tutor\Repositories\CountryRepository;
use Tis\Tutor\Repositories\GenderRepository;

class MetadataController extends Controller {

	protected $genders;

	protected $countries;

	public function __construct(
		GenderRepository $genders,
		CountryRepository $countries) {
		$this->genders   = $genders;
		$this->countries = $countries;
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
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.list', compact('title', 'type', 'columns', 'attributes', 'items'));
	}

	public function showCountry($id) {
		$object     = $this->countries->get($id);
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createCountry() {
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeCountry(SaveCountryRequest $request) {
		if ($this->countries->store($request->all())) {
			return redirect()->route('metadata.country.list')->withSuccess('添加性别成功！');
		} else {
			return back()->withInput()->withError('添加性别失败');
		}
	}

	public function editCountry($id) {
		$object     = $this->countries->get($id);
		$attributes = $this->countries->getAttributes();
		$type       = 'country';
		$title      = '性别';
		$columns    = ['代码', '名称'];

		return view('meta.edit', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function updateCountry(SaveCountryRequest $request, $id) {
		if ($this->countries->update($id, $request->all())) {
			return redirect()->route('metadata.country.list')->withSuccess('更新性别成功！');
		} else {
			return back()->withInput()->withError('更新性别失败');
		}
	}

	public function deleteCountry($id) {
		if ($this->countries->delete($id)) {
			return redirect()->route('metadata.country.list')->withSuccess('删除性别成功！');
		} else {
			return back()->withInput()->withError('删除性别失败');
		}
	}
}

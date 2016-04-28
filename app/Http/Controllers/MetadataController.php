<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenderRequest;
use Tis\Tutor\Repositories\GenderRepository;

class MetadataController extends Controller {

	protected $genders;

	public function __construct(GenderRepository $genders) {
		$this->genders = $genders;
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
		$object     = $this->genders->getGender($id);
		$attributes = $this->genders->getAttributes();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];
		$attributes = array_combine($attributes, $columns);

		return view('meta.show', compact('title', 'type', 'columns', 'attributes', 'object'));
	}

	public function createGender() {
		$attributes = $this->genders->getAttributes();
		$type       = 'gender';
		$title      = '性别';
		$columns    = ['代码', '名称'];
		$attributes = array_combine($attributes, $columns);

		return view('meta.create', compact('title', 'type', 'columns', 'attributes'));
	}

	public function storeGender(StoreGenderRequest $request) {
		if ($this->genders->save($request->all())) {
			return redirect()->route('metadata.gender.list')->withSuccess('添加性别成功！');
		} else {
			return back()->withInput()->withError('添加性别失败');
		}
	}
}

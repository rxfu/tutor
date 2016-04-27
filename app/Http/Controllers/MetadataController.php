<?php

namespace App\Http\Controllers;

use Tis\Tutor\Repositories\GenderRepository;

class MetadataController extends Controller {

	protected $genders;

	public function __construct(GenderRepository $genders) {
		$this->genders = $genders;
	}

	public function getGenderList() {
		$fields  = $this->genders->getAll();
		$title   = '性别';
		$columns = ['代码', '名称'];

		return view('meta.list', compact('title', 'columns', 'fields'));
	}
}

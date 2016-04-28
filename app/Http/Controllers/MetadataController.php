<?php

namespace App\Http\Controllers;

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

}

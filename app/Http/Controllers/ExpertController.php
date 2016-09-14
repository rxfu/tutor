<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckExpertRequest;
use Tis\Tutor\Repositories\ExpertRepository;
use Tis\Tutor\Repositories\TutorRepository;

class ExpertController extends Controller {

	protected $experts;

	protected $tutors;

	public function __construct(ExpertRepository $experts, TutorRepository $tutors) {
		$this->experts = $experts;
		$this->tutors  = $tutors;
	}

	public function getList() {
		$items = $this->experts->getAll();

		$title = '专家信息';

		return view('expert.list', compact('title', 'items'));
	}

	public function getNew() {
		$title = '专家证件号码';

		return view('expert.new', compact('title'));
	}

	public function create(CheckExpertRequest $request) {
		$inputs = $request->all();

		$item  = $this->tutors->getTutorById($inputs['sfzh']);
		$title = '专家信息';

		if (is_object($item)) {
			return view('expert.create', compact('title', 'item'));
		} else {
			return view('expert.create', compact('title'));
		}
	}
}

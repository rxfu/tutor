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
		$id = $request->input('sfzh');

		$item  = $this->tutors->getTutorById($id);
		$title = '专家信息';

		if (is_object($item)) {
			return view('expert.create', compact('title', 'item', 'id'));
		} else {
			return view('expert.create', compact('title', 'id'));
		}
	}

	public function store($request) {
		$title = '专家';
	}
}

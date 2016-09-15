<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckExpertRequest;
use App\Http\Requests\SaveExpertRequest;
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

	public function show($id) {
		$item  = $this->experts->get($id);
		$title = '专家信息';

		return view('expert.show', compact('title', 'item'));
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

	public function store(SaveExpertRequest $request) {
		$title = '专家';

		if ($this->experts->store($request->all())) {
			return redirect()->route('expert.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}
	
	public function edit($id) {
		$item  = $this->experts->get($id);
		$title = '专家信息';

		return view('expert.edit', compact('title', 'item'));
	}

	public function update(SaveExpertRequest $request, $id) {
		$title = '专家';

		if ($this->experts->update($id, $request->all())) {
			return redirect()->route('expert.list')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($id) {
		$title = '专家';

		if ($this->experts->delete($id)) {
			return redirect()->route('expert.list')->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}
}

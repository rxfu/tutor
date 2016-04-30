<?php

namespace App\Http\Controllers;

class TutorController extends Controller {

	protected $tutors;

	public function __construct(TutorRepository $tutors) {
		$this->tutors = $tutors;
	}

	public function getList() {
		$items = $this->tutors->getAll();
		$title = '导师';

		return view('tutor.list', compact('title', 'items'));
	}

	public function show($id) {
		$item  = $this->tutors->get($id);
		$title = '导师';

		return view('tutor.show', compact('title', 'item'));
	}

	public function create() {
		$title = '导师';

		return view('tutor.create', compact('title'));
	}

	public function store(SaveTutorRequest $request) {
		$title = '导师';

		if ($this->tutors->store($request->all())) {
			return redirect()->route('tutor.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function edit($id) {
		$item  = $this->tutors->get($id);
		$title = '导师';

		return view('tutor.edit', compact('title', 'item'));
	}

	public function update(SaveTutorRequest $request, $id) {
		$title = '导师';

		if ($this->tutors->update($id, $request->all())) {
			return redirect()->route('tutor.list')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($id) {
		$title = '导师';

		if ($this->tutors->delete($id)) {
			return redirect()->route('tutor.list')->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}
}

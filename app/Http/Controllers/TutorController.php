<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTutorRequest;
use Illuminate\Support\Facades\Auth;
use Tis\Account\Entities\User;
use Tis\Account\Repositories\UserRepository;
use Tis\Tutor\Repositories\TutorRepository;

class TutorController extends Controller {

	protected $users;

	protected $tutors;

	public function __construct(UserRepository $users, TutorRepository $tutors) {
		$this->users  = $users;
		$this->tutors = $tutors;
	}

	public function getList() {
		if (Auth::user()->can('college-access')) {
			$items = $this->tutors->getAllByCollege(Auth::user()->xy);
		} else {
			$items = $this->tutors->getAll();
		}

		$title = '导师信息';

		return view('tutor.list', compact('title', 'items'));
	}

	public function show($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		$item  = $this->tutors->getTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds);
		$title = '导师信息';

		return view('tutor.show', compact('title', 'item'));
	}

	public function create(User $user) {
		$title = '导师信息';

		return view('tutor.create', compact('title', 'user'));
	}

	public function store(SaveTutorRequest $request) {
		$title = '导师';

		if ($this->tutors->store($request->all())) {
			return redirect()->route('tutor.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function edit($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		$item  = $this->tutors->getTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds);
		$title = '导师信息';

		return view('tutor.edit', compact('title', 'item'));
	}

	public function update(SaveTutorRequest $request, $zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		$title = '导师';

		if ($this->tutors->updateTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds, $request->all())) {
			return redirect()->route('tutor.list')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds) {
		$title = '导师';

		if ($this->tutors->deleteTutor($zjhm, $dslb, $dsdl, $ejxkdm, $sfjzds)) {
			return redirect()->route('tutor.list')->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}

	public function getApplication() {
		$items = $this->users->getTutors();
		$title = '导师申请列表';

		return view('tutor.application', compact('title', 'items'));
	}

	public function getPublicity() {
		$items = $this->tutors->getTutorsByAppdate();
		$title = '导师公示列表';

		return view('tutor.publicity', compact('title', 'items'));
	}

}

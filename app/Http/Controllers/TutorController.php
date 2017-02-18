<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveTutorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tis\Account\Entities\User;
use Tis\Account\Repositories\UserRepository;
use Tis\Tutor\Repositories\AdwardRepository;
use Tis\Tutor\Repositories\ProjectRepository;
use Tis\Tutor\Repositories\ResultRepository;
use Tis\Tutor\Repositories\SelectionRepository;
use Tis\Tutor\Repositories\TutorRepository;

class TutorController extends Controller {

	protected $users;

	protected $tutors;

	protected $selections;

	protected $results;

	protected $adwards;

	protected $projects;

	public function __construct(UserRepository $users, TutorRepository $tutors, SelectionRepository $selections, ResultRepository $results, AdwardRepository $adwards, ProjectRepository $projects) {
		$this->users      = $users;
		$this->tutors     = $tutors;
		$this->selections = $selections;
		$this->results    = $results;
		$this->adwards    = $adwards;
		$this->projects   = $projects;
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
		if ($this->tutors->exists($user->sfzh)) {
			return redirect()->route('tutor.createSelection', $user->sfzh);
		} else {
			$title = '导师信息';

			return view('tutor.create', compact('title', 'user'));
		}
	}

	public function store(Request $request) {
		$title = '导师';

		if ($this->tutors->store($request->all())) {
			return redirect()->route('tutor.createSelection', $request->input('zjhm'))->withSuccess('添加' . $title . '成功！');
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
		if (Auth::user()->can('tutor-access')) {
			return redirect()->route('tutor.create', Auth::user());
		} else {
			$items = $this->users->getTutors();
			$title = '导师申请列表';

			return view('tutor.application', compact('title', 'items'));
		}
	}

	public function getPublicity() {
		$items = $this->tutors->getTutorsByAppdate();
		$title = '导师公示列表';

		return view('tutor.publicity', compact('title', 'items'));
	}

	public function getNewSelection() {
		$title = '遴选导师证件号码';

		return view('tutor.new_selection', compact('title'));
	}

	public function createSelection($id) {
		$title = '遴选导师信息';

		if ($this->tutors->exists($id)) {
			$item = $this->tutors->get($id);

			if (is_object($item)) {
				return view('tutor.create_selection', compact('title', 'item', 'id'));
			}
		}

		return back()->withInput()->withError('查无此人，请检查证件号码是否有误');
	}

	public function saveSelection(Request $request) {
		$title = '遴选导师';

		if ($this->selections->store($request->all())) {
			return redirect()->route('tutor.createResult', $request->input('zjhm'))->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function getSelection() {
		$items = $this->selections->getAll();
		$title = '导师遴选列表';

		return view('tutor.list_selection', compact('title', 'items'));
	}

	public function getAuditSelection($id, $type) {
		$title = '遴选导师审核';
		$item  = $this->selections->get($id);

		return view('tutor.audit_selection', compact('title', 'type', 'item'));
	}

	public function auditSelection(Request $request, $id) {
		$title = '遴选导师';

		if ($this->selections->update($id, $request->all())) {
			return redirect()->route('tutor.listSelection')->withSuccess('审核' . $title . '成功！');
		} else {
			return back()->withInput()->withError('审核' . $title . '失败');
		}
	}

	public function createResult($id) {
		$title = '最具代表性成果';

		$items = $this->results->exists($id) ? $this->results->get($id) : [];

		return view('tutor.create_result', compact('title', 'items', 'id'));
	}

	public function saveResult(Request $request) {
		$title = '最具代表性成果';

		if ($this->results->store($request->all())) {
			return redirect()->route('tutor.createAdward', $request->input('zjhm'))->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function createAdward($id) {
		$title = '主要获奖成果及专利';

		$items = $this->adwards->exists($id) ? $this->adwards->get($id) : [];

		return view('tutor.create_adward', compact('title', 'items', 'id'));
	}

	public function saveAdward(Request $request) {
		$title = '主要获奖成果及专利';

		if ($this->adwards->store($request->all())) {
			return redirect()->route('tutor.createProject', $request->input('zjhm'))->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function createProject($id) {
		$title = '目前承担的主要科研项目';

		$items = $this->projects->exists($id) ? $this->projects->get($id) : [];

		return view('tutor.create_project', compact('title', 'items', 'id'));
	}

	public function saveProject(Request $request) {
		$title = '目前承担的主要科研项目';

		if ($this->projects->store($request->all())) {
			return redirect()->route('tutor.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function showSelection($id) {
		$item  = $this->selections->get($id);
		$title = '导师信息';

		return view('tutor.show', compact('title', 'item'));
	}

}

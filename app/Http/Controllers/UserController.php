<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tis\Account\Entities\User;
use Tis\Account\Repositories\UserRepository;
use Tis\Account\Services\UserService;

class UserController extends Controller {

	protected $users;

	protected $userService;

	public function __construct(UserRepository $users, UserService $userService) {
		$this->users       = $users;
		$this->userService = $userService;
	}

	public function showChangePasswordForm() {
		$title = '修改密码';

		return view('user.password', compact('title'));
	}

	public function changePassword(ChangePasswordRequest $request) {
		if ($request->isMethod('put')) {
			if ($this->userService->changePassword(Auth::user(), $request->input('old_password'), $request->input('password'))) {
				return redirect()->route('user.password')->withSuccess('修改密码成功');
			} else {
				return back()
					->withInput()
					->withErrors(['old_password' => '修改密码失败']);
			}
		}
	}

	public function resetPassword(Request $request, User $user) {
		if ($request->isMethod('put')) {
			if ($this->userService->resetPassword($user)) {
				return redirect()->route('user.list')->withSuccess('重置密码成功');
			} else {
				return back()->withInput()
					->withError('重置密码失败');
			}
		}
	}

	public function getList() {
		if (Auth::user()->can('college-access')) {
			$items = $this->users->getAllByCollege(Auth::user()->xy);
		} else {
			$items = $this->users->getAll();
		}

		$title = '用户';

		return view('user.list', compact('title', 'items'));
	}

	public function show($id) {
		$item  = $this->users->get($id);
		$title = '用户';

		return view('user.show', compact('title', 'item'));
	}

	public function create() {
		$title = '用户';

		return view('user.create', compact('title'));
	}

	public function store(SaveUserRequest $request) {
		$title = '用户';

		if ($this->users->store($request->all())) {
			return redirect()->route('user.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function edit($id) {
		$item  = $this->users->get($id);
		$title = '用户';

		return view('user.edit', compact('title', 'item'));
	}

	public function update(SaveUserRequest $request, $id) {
		$title = '用户';

		if ($this->users->update($id, $request->all())) {
			return redirect()->route('user.list')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($id) {
		$title = '用户';

		if ($this->users->delete($id)) {
			return redirect()->route('user.list')->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}
}

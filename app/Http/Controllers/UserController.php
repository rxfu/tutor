<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use Tis\Account\Services\UserService;

class UserController extends Controller {

	protected $userService;

	public function __construct(UserService $userService) {
		$this->userService = $userService;
	}

	public function showChangePasswordForm() {
		$title = '修改密码';

		return view('user.password', compact('title'));
	}

	public function changePassword(ChangePasswordRequest $request) {
		if ($request->isMethod('put')) {
			if ($this->userService->changePassword(Auth::user(), $request->input('old_password'), $request->input('password'))) {
				return redirect()->route('user.password')->withStatus('修改密码成功');
			} else {
				return redirect()->back()
					->withInput()
					->withErrors(['old_password' => '修改密码失败']);
			}
		}
	}
}

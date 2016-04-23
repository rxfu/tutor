<?php

namespace App\Http\Controllers;

class UserController extends Controller {

	public function showChangePasswordForm() {
		$title = '修改密码';

		return view('user.password', compact('title'));
	}

	public function changePassword() {

	}
}

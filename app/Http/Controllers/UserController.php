<?php

namespace App\Http\Controllers;

class UserController extends Controller {

	public function showPasswordForm() {
		$title = '修改密码';

		return view('user.password', compact('title'));
	}
}

<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index() {
		$title = '使用说明';

		return view('home.index', compact('title'));
	}
}

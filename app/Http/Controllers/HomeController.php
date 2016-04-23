<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index() {
		$title = '仪表盘';

		return view('home.index', compact('title'));
	}
}

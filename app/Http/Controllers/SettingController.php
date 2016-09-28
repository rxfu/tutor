<?php

namespace App\Http\Controllers;

class SettingController extends Controller {

	protected $settings;

	public function __construct(SettingRepository $settings) {
		$this->settings = $settings;
	}

	public function edit() {
		$items = $this->settings->getAll();
		$title = '系统设置';

		return view('setting.edit', compact('title', 'items'));
	}
}

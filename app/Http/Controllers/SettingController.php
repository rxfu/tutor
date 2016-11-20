<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tis\Setting\Repositories\SettingRepository;

class SettingController extends Controller {

	protected $settings;

	public function __construct(SettingRepository $settings) {
		$this->settings = $settings;
	}

	public function edit() {
		$items = $this->settings->getAll();
		$items = array_pluck($items, 'value', 'id');
		$title = '系统设置';

		return view('setting.edit', compact('title', 'items'));
	}

	public function update(Request $request) {
		$title = '系统设置';

		if ($this->settings->updateSettings($request->all())) {
			return redirect()->route('setting.edit')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}
}

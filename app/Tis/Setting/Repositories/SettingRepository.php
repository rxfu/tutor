<?php

namespace Tis\Setting\Repositories;

use Tis\Core\Repository;
use Tis\Setting\Entities\Setting;

class SettingRepository extends Repository {

	public function __construct(Setting $setting) {
		$this->object = $setting;
	}

	public function updateSettings($data) {
		$data = array_except($data, ['_method', '_token']);

		foreach ($data as $key => $value) {
			parent::update($key, ['value' => $value]);
		}

		return true;
	}
}
<?php

namespace Tis\Setting\Repositories;

use Tis\Core\Repository;

class SettingRepository extends Repository {

	public function __construct(Setting $setting) {
		$this->object = $setting;
	}
}
<?php

namespace Tis\Account\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

	public function super() {
		return $this->is_super ? '是' : '否';
	}
}
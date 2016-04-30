<?php

namespace Tis\Account\Presenters;

use Laracasts\Presenter\Presenter;

class RolePresenter extends Presenter {

	public function option($id) {
		$selected = $this->id === $id ? ' selected' : '';

		return '<option value="' . $this->id . '"' . $selected . '>' . $this->name . '</option>';
	}
}
<?php

namespace Tis\Tutor\Presenters;

use Laracasts\Presenter\Presenter;

class GenderPresenter extends Presenter {

	public function option($id) {
		$selected = $this->dm === $id ? ' selected' : '';

		return '<option value="' . $this->dm . '"' . $selected . '>' . $this->mc . '</option>';
	}
}
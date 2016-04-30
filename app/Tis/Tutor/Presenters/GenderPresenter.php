<?php

namespace Tis\Tutor\Presenters;

use Laracasts\Presenter\Presenter;

class GenderPresenter extends Presenter {

	public function option($id) {
		$selected = $this->xbdm === $id ? ' selected' : '';

		return '<option value="' . $this->xbdm . '"' . $selected . '>' . $this->xbmc . '</option>';
	}
}
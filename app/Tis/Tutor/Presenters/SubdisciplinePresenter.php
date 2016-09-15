<?php

namespace Tis\Tutor\Presenters;

use Laracasts\Presenter\Presenter;

class SubdisciplinePresenter extends Presenter {

	public function option($id) {
		$selected = $this->dm === $id ? ' selected' : '';

		return '<option value="' . $this->dm . '"' . $selected . ' class="' . $this->yjxkdm . '">' . $this->mc . '</option>';
	}
}
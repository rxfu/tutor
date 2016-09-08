<?php

namespace Tis\Account\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

	public function super() {
		return $this->is_super ? '是' : '否';
	}

	public function super_radio($is_super = false) {
		if ($is_super) {
			$yes = ' checked';
			$no  = '';
		} else {
			$yes = '';
			$no  = ' checked';
		}

		$radio_beg = '<label class="radio-inline">';
		$radio_end = '</label>';

		return $radio_beg . '<input type="radio" name="is_super" value="1"' . $yes . '>&nbsp;是' . $radio_end . $radio_beg . '<input type="radio" name="is_super" value="0"' . $no . '>&nbsp;否' . $radio_end;
	}

	public function college() {
		return is_null($this->xy) ? '无' : $this->entity->college->mc;
	}
}
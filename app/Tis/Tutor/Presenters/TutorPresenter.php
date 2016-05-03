<?php

namespace Tis\Tutor\Presenters;

use Laracasts\Presenter\Presenter;

class TutorPresenter extends Presenter {

	public function category() {
		switch ($this->dsdl) {
		case 1:
			return '科学学位';

		case 2:
			return '专业学位';

		default:
			return '';
		}
	}

	public function type() {
		switch ($this->dslb) {
		case 1:
			return '硕士生导师';

		case 2:
			return '博士生导师';

		default:
			return '';
		}
	}

	public function is_part_time() {
		return $this->sfjzds ? '是' : '否';
	}
}
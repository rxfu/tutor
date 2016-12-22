<?php

namespace Tis\Tutor\Presenters;

use Laracasts\Presenter\Presenter;

class SelectionPresenter extends Presenter {

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

	public function education() {
		switch ($this->zgxl) {
		case 1:
			return '本科';

		case 2:
			return '硕士研究生';

		case 3:
			return '博士研究生';

		default:
			return '';
		}
	}

	public function degree() {
		switch ($this->zgxw) {
		case 0:
			return '无';

		case 1:
			return '本科';

		case 2:
			return '硕士';

		case 3:
			return '博士';

		default:
			return '';
		}
	}

	public function jyssh() {
		switch ($this->jysshyj) {
		case '0':
			return '不同意';

		case '1':
			return '同意';

		default:
			return '';
		}
	}

	public function xwpdfwhsh() {
		switch ($this->xwpdfwhshyj) {
		case '0':
			return '不同意';

		case '1':
			return '同意';

		default:
			return '';
		}
	}

	public function xxwpdwyhsh() {
		switch ($this->xxwpdwyhshyj) {
		case '0':
			return '不同意';

		case '1':
			return '同意';

		default:
			return '';
		}
	}
}
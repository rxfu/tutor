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
		switch ($this->zgxl) {
		case 0:
			return '无';

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

	public function skill() {
		switch ($this->wgyslcd) {
		case 1:
			return '一般';

		case 2:
			return '熟练';

		case 3:
			return '精通';

		default:
			return '';
		}
	}

	public function is_train() {
		return $this->sfpx ? '已培训' : '未培训';
	}

	public function is_submit() {
		return $this->sftj ? '已提交' : '未提交';
	}

	public function is_audit() {
		return $this->sfsh ? '已审核' : '未审核';
	}

	public function is_pass() {
		return $this->sftg ? '已通过' : '未通过';
	}

	public function is_employ() {
		return $this->sfpy ? '正在聘用' : '未聘用';
	}

	public function is_publicity() {
		return $this->sfpy ? '正在公示' : '不公示';
	}
}
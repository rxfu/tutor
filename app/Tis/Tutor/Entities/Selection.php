<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Selection extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\SelectionPresenter';

	protected $table = 'y_ds_lxxx';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	public function tutor() {
		return $this->belongsTo('Tis\Tutor\Entities\Tutor', 'zjhm', 'zjhm');
	}

	public function discipline() {
		return $this->belongsTo('Tis\Tutor\Entities\Discipline', 'yjxkdm', 'dm');
	}

	public function subdiscipline() {
		return $this->belongsTo('Tis\Tutor\Entities\Subdiscipline', 'ejxkdm', 'dm');
	}

	public function subdiscipline2() {
		return $this->belongsTo('Tis\Tutor\Entities\Subdiscipline', 'nsbxkzy', 'dm');
	}

	public function results() {
		return $this->hasMany('Tis\Tutor\Entities\Result', 'zjhm', 'zjhm');
	}

	public function adwards() {
		return $this->hasMany('Tis\Tutor\Entities\Adward', 'zjhm', 'zjhm');
	}

	public function projects() {
		return $this->hasMany('Tis\Tutor\Entities\Project', 'zjhm', 'zjhm');
	}
}
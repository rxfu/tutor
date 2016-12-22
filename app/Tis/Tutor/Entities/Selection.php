<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Selection extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\SelectionPresenter';

	protected $table = 'y_dslx';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	public function tutor() {
		return $this->belongsTo('Tis\Tutor\Entities\Tutor', 'sfzh', 'zjhm');
	}

	public function subdiscipline() {
		return $this->belongsTo('Tis\Tutor\Entities\Subdiscipline', 'nsbxkzy', 'dm');
	}
}
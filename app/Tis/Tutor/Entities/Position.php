<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Position extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\PositionPresenter';

	protected $table = 'y_dszc';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'zyzc', 'dm');
	}
}

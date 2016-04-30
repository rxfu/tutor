<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Nation extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\NationPresenter';

	protected $table = 'y_mzm';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'mzm', 'dm');
	}
}

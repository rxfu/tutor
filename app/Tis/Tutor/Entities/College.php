<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class College extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\CollegePresenter';

	protected $table = 'y_xy';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc', 'bz',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'szbm', 'dm');
	}
}

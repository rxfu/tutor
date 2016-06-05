<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Gender extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\GenderPresenter';

	protected $table = 'y_xb';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'xb', 'dm');
	}
}

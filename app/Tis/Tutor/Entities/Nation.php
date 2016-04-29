<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model {

	protected $table = 'y_mzm';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'mzm', 'dm');
	}
}

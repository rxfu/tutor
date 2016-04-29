<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Party extends Model {

	protected $table = 'y_zzmmm';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'zzmmm', 'dm');
	}
}

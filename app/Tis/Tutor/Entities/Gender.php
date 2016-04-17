<?php

namespace App\Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model {

	protected $table = 'y_xb';

	protected $primaryKey = 'xbdm';

	public $incrementing = false;

	public $timestamps = false;

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'xb', 'xbdm');
	}
}

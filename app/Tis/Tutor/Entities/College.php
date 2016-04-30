<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class College extends Model {

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

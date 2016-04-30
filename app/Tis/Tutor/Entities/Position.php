<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Position extends Model {

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

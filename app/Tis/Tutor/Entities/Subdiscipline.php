<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Subdiscipline extends Model {

	protected $table = 'y_ejxk';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'ejxkdm', 'dm');
	}
}

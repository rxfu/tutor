<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model {

	protected $table = 'y_yjxk';

	protected $primaryKey = 'dm';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'dm', 'mc',
	];

	public function tutors() {
		return $this->hasMany('App\Tis\Tutor\Entities\Tutor', 'yjxkdm', 'dm');
	}
}

<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Discipline extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\DisciplinePresenter';

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

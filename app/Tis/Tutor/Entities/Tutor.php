<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Tutor extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Tutor\Presenters\TutorPresenter';

	protected $table = 'y_ds_dsxx';

	protected $primaryKey = 'zjhm';

	public $incrementing = false;

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	protected $casts = [
		'sfpx' => 'boolean',
		'sftj' => 'boolean',
		'sfsh' => 'boolean',
		'sftg' => 'boolean',
		'sfpy' => 'boolean',
		'sfgs' => 'boolean',
	];

	public function gender() {
		return $this->belongsTo('Tis\Tutor\Entities\Gender', 'xb', 'dm');
	}

	public function country() {
		return $this->belongsTo('Tis\Tutor\Entities\Country', 'gbm', 'dm');
	}

	public function nation() {
		return $this->belongsTo('Tis\Tutor\Entities\Nation', 'mzm', 'dm');
	}

	public function party() {
		return $this->belongsTo('Tis\Tutor\Entities\Party', 'zzmmm', 'dm');
	}

	public function college() {
		return $this->belongsTo('Tis\Tutor\Entities\College', 'szbm', 'dm');
	}

	public function position() {
		return $this->belongsTo('Tis\Tutor\Entities\Position', 'zyzc', 'dm');
	}

	public function discipline() {
		return $this->belongsTo('Tis\Tutor\Entities\Discipline', 'yjxkdm', 'dm');
	}

	public function subdiscipline() {
		return $this->belongsTo('Tis\Tutor\Entities\Subdiscipline', 'ejxkdm', 'dm');
	}
}

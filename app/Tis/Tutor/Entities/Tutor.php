<?php

namespace App\Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model {

	protected $table = 'y_ds_dsxx';

	protected $primaryKey = 'zjhm';

	public $incrementing = false;

	public $timestamps = false;

	protected $casts = [
		'sfjzds' => 'boolean',
		'sfpx'   => 'boolean',
		'sftj'   => 'boolean',
		'sfsh'   => 'boolean',
		'sftg'   => 'boolean',
		'sfpy'   => 'boolean',
	];

	public function gender() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Gender', 'xb', 'xbdm');
	}

	public function country() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Country', 'gbm', 'dm');
	}

	public function nation() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Nation', 'mzm', 'dm');
	}

	public function party() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Party', 'zzmmm', 'dm');
	}

	public function college() {
		return $this->belongsTo('App\Tis\Tutor\Entities\College', 'szbm', 'dm');
	}

	public function position() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Position', 'zyzc', 'dm');
	}

	public function discipline() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Discipline', 'yjxkdm', 'dm');
	}

	public function discipline() {
		return $this->belongsTo('App\Tis\Tutor\Entities\Subdiscipline', 'ejxkdm', 'dm');
	}
}

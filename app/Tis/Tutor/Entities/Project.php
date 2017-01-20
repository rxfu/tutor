<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $table = 'y_ds_zykyxm';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	public function tutor() {
		return $this->belongsTo('Tis\Tutor\Entities\Tutor', 'zjhm', 'zjhm');
	}

}
<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {

	protected $table = 'y_ds_zjdbxcg';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	public function tutor() {
		return $this->belongsTo('Tis\Tutor\Entities\Tutor', 'zjhm', 'zjhm');
	}

}
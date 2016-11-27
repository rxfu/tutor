<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model {

	protected $table = 'y_dslx';

	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $guarded = [
		'_token',
	];

	public function tutor() {
		return $this->belongsTo('Tis\Tutor\Entities\Tutor', 'sfzh', 'zjhm');
	}
}
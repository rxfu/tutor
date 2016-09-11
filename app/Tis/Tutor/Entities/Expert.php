<?php

namespace Tis\Tutor\Entities;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model {

	protected $table = 'y_zjk';

	protected $primaryKey = 'sfzh';

	public $incrementing = false;

	public $timestamps = false;

	protected $guard = [
		'_token',
	];
}
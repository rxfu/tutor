<?php

namespace Tis\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table = 'y_setting';

	public $incrementing = false;

	public $timestamps = false;

	protected $fillable = [
		'id', 'value',
	];
}
<?php

namespace Tis\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	public $timestamps = false;

	public function users() {
		return $this->belongsToMany('Tis\Account\Entities\User', 'y_user_role');
	}
}

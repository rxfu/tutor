<?php

namespace Tis\Account\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model {

	protected $table = 'y_role';

	public $timestamps = false;

	protected $fillable = ['id', 'slug', 'name', 'description'];

	public function setRoleSlugAttribute($value) {
		$this->attributes['role_slug'] = Str::lower($value);
	}

	public function users() {
		return $this->hasMany('Tis\Account\Entities\User');
	}
}

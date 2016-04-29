<?php

namespace Tis\Account\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username', 'password', 'xm', 'sfzh', 'is_super',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	protected $table = 'y_user';

	protected $casts = [
		'is_super' => 'boolean',
	];

	public function role() {
		return $this->belongsTo('Tis\Account\Entities\Role');
	}
}

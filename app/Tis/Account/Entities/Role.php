<?php

namespace Tis\Account\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laracasts\Presenter\PresentableTrait;

class Role extends Model {

	use PresentableTrait;

	protected $presenter = 'Tis\Account\Presenters\RolePresenter';

	protected $table = 'y_role';

	public $timestamps = false;

	protected $fillable = [
		'slug', 'name', 'description',
	];

	public function setSlugAttribute($value) {
		$this->attributes['slug'] = Str::lower($value);
	}

	public function users() {
		return $this->hasMany('Tis\Account\Entities\User');
	}
}

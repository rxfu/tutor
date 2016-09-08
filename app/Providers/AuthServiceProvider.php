<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		'App\Model' => 'App\Policies\ModelPolicy',
	];

	/**
	 * Register any application authentication / authorization services.
	 *
	 * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
	 * @return void
	 */
	public function boot(GateContract $gate) {
		$this->registerPolicies($gate);

		$gate->define('admin-access', function ($user) {
			return 'admin' == $user->role->slug;
		});

		$gate->define('college-access', function ($user) {
			return 'college' == $user->role->slug;
		});

		$gate->define('manager-access', function ($user) {
			return 'manager' == $user->role->slug;
		});

		$gate->define('tutor-access', function ($user) {
			return 'tutor' == $user->role->slug;
		});
	}
}

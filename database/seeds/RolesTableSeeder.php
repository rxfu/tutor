<?php

use Illuminate\Database\Seeder;
use Tis\Account\Entities\Role;

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Role::truncate();

		Role::create([
			'role_slug' => 'admin',
			'name'      => '管理员',
		]);
		Role::create([
			'role_slug' => 'college',
			'name'      => '教学秘书',
		]);
		Role::create([
			'role_slug' => 'manager',
			'name'      => '学位办',
		]);
		Role::create([
			'role_slug' => 'tutor',
			'name'      => '导师',
		]);
	}
}

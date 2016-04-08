<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Role::truncate();

		Role::create([
			'name' => '管理员',
		]);
		Role::create([
			'name' => '教学秘书',
		]);
		Role::create([
			'name' => '学位办',
		]);
		Role::create([
			'name' => '导师',
		]);
	}
}

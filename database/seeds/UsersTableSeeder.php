<?php

use Illuminate\Database\Seeder;
use Tis\Account\Entities\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::truncate();

		User::create([
			'username' => 'admin',
			'password' => bcrypt('admin888'),
			'xm'       => '管理员',
			'role_id'  => 1,
			'is_super' => true,
		]);
	}
}

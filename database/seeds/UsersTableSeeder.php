<?php

use Illuminate\Database\Seeder;
use Tis\Account\Entities\User;
use Tis\Tutor\Entities\Tutor;

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

		User::create([
			'username' => 'test001',
			'password' => bcrypt('666666'),
			'xm'       => '教学秘书',
			'role_id'  => 2,
			'xy'       => '001',
		]);

		$tutors = Tutor::select('xm', 'zjhm')->distinct()->get();
		foreach ($tutors as $tutor) {
			User::create([
				'username' => $tutor->zjhm,
				'password' => bcrypt(config('constants.default_password')),
				'sfzh'     => $tutor->zjhm,
				'xm'       => $tutor->xm,
				'role_id'  => 4,
			]);
		}
	}
}

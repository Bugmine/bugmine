<?php

use Bugmine\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$administratorGroup = \Bugmine\Group::whereName('Administrator')->first();
		$developerGroup = \Bugmine\Group::whereName('Developer')->first();
		$userGroup = \Bugmine\Group::whereName('User')->first();
		User::create(['name' => 'admin', 'email' => 'admin@example.com', 'password' => Hash::make('admin'), 'group_id' => $administratorGroup->id]);
		User::create(['name' => 'developer', 'email' => 'developer@example.com', 'password' => Hash::make('developer'), 'group_id' => $developerGroup->id]);
		User::create(['name' => 'user', 'email' => 'user@example.com', 'password' => Hash::make('user'), 'group_id' => $userGroup->id]);
	}

}

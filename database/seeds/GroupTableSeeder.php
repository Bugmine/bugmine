<?php

use Bugmine\Group;

class GroupTableSeeder extends \Illuminate\Database\Seeder {
	public function run()
	{
		Group::create(['name' => 'User', 'isSystemGroup' => true]);
		Group::create(['name' => 'Developer', 'isSystemGroup' => true]);
		Group::create(['name' => 'Administrator', 'isSystemGroup' => true]);
	}
}

<?php

class GroupTableSeeder extends \Illuminate\Database\Seeder {
	public function run()
	{
		\Bugmine\Group::create(['name' => 'User', 'isSystemGroup' => true]);
		\Bugmine\Group::create(['name' => 'Developer', 'isSystemGroup' => true]);
		\Bugmine\Group::create(['name' => 'Administrator', 'isSystemGroup' => true]);
	}
}
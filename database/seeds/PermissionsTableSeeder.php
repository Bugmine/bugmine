<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RightsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('permissions')->delete();
		\Bugmine\Permission::create([
			"name"     => "User.Index",
			"category" => "User"
		]);
		\Bugmine\Permission::create([
			"name"     => "User.Show",
			"category" => "User"
		]);
		\Bugmine\Permission::create([
			"name"     => "User.Create",
			"category" => "User"
		]);
		\Bugmine\Permission::create([
			"name"     => "User.Edit",
			"category" => "User"
		]);
		\Bugmine\Permission::create([
			"name"     => "User.Delete",
			"category" => "User"
		]);
	}

}
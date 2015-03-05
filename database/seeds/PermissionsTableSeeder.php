<?php

use Bugmine\Permission;
use Illuminate\Database\Seeder;

class RightsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('permissions')->delete();
		Permission::create([
			"name"     => "User.Index",
			"category" => "User"
		]);
		Permission::create([
			"name"     => "User.Show",
			"category" => "User"
		]);
		Permission::create([
			"name"     => "User.Create",
			"category" => "User"
		]);
		Permission::create([
			"name"     => "User.Edit",
			"category" => "User"
		]);
		Permission::create([
			"name"     => "User.Delete",
			"category" => "User"
		]);
	}

}

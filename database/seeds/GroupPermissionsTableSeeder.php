<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class GroupPermissionsTableSeeder extends Seeder {

    public function run()
    {
        $userGroup = \Bugmine\Group::whereName('User')->first();
        $developerGroup = \Bugmine\Group::whereName('Developer')->first();
        $administratorGroup = \Bugmine\Group::whereName('Administrator')->first();

        $userGroup->addPermission($this->getPermission('User.Index'));
        $userGroup->addPermission($this->getPermission('User.Show'));

        $developerGroup->addPermission($this->getPermission('User.Index'));
        $developerGroup->addPermission($this->getPermission('User.Show'));

        $administratorGroup->addPermission($this->getPermission('User.Index'));
        $administratorGroup->addPermission($this->getPermission('User.Show'));
        $administratorGroup->addPermission($this->getPermission('User.Create'));
        $administratorGroup->addPermission($this->getPermission('User.Edit'));
        $administratorGroup->addPermission($this->getPermission('User.Delete'));
    }


    private function getPermission($name) {
        return \Bugmine\Permission::whereName($name)->first();
    }
}
<?php

use Bugmine\Group;
use Bugmine\Permission;
use Illuminate\Database\Seeder;

class GroupPermissionsTableSeeder extends Seeder {

    public function run()
    {
        $userGroup = Group::whereName('User')->first();
        $developerGroup = Group::whereName('Developer')->first();
        $administratorGroup = Group::whereName('Administrator')->first();

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
        return Permission::whereName($name)->first();
    }
}

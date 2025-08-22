<?php

namespace App;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

trait RolepermissionTrait
{
    public function assignRole(string $roleName, string $guardName= 'api'){
        
            $role = Role::where('name', $roleName)->where('guard_name', $guardName)->firstOrFail();
            $this->assign($role);
        
    }

    public function givePermission(string $permssionName, string $guardName = 'api')
    {
        $permission =  Permission::where('name', $permssionName)->where('guard_name', $guardName)->firstOrFail();
        $this->give($permission);
    }
}

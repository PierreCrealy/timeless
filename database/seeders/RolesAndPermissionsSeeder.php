<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create roles
        Role::create(['name' => 'Employee','guard_name'=> 'web']);
        Role::create(['name' => 'Customer','guard_name'=> 'web']);
        Role::create(['name' => 'Admin','guard_name'=> 'web']);

        /*
        //Permission
        //USER
        $permissionCreateUser = Permission::create(['name' => 'create-user','guard_name'=> 'api']);
        $permissionReadUser   = Permission::create(['name' => 'read-user','guard_name'=> 'api']);
        $permissionUpdateUser = Permission::create(['name' => 'update-user','guard_name'=> 'api']);
        $permissionDeleteUser = Permission::create(['name' => 'delete-user','guard_name'=> 'api']);

        //assign permissions to each role

        $roleAdmin->givePermissionTo([
            //user
            $permissionCreateUser,$permissionReadUser,$permissionUpdateUser,$permissionDeleteUser
        ]);

        //User::find(1)->assignRole($roleCustomerBooker);

        */

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleStandar = Role::create(['name' => 'standard']);

        $permission_read = Permission::create(['name' => 'read articles']);
        $permission_edit = Permission::create(['name' => 'edit articles']);
        $permission_write = Permission::create(['name' => 'write articles']);
        $permission_delete = Permission::create(['name' => 'delete articles']);

        $permissions_admin = [$permission_read,$permission_edit,$permission_write,$permission_delete];
         
        $roleAdmin->syncPermissions($permissions_admin);
        
        $roleStandar->givePermissionTo($permission_read);


    }
}

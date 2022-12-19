<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create(['name'=>'create customer']);
        Permission::create(['name'=>'read customer']);
        Permission::create(['name'=>'update customer']);
        Permission::create(['name'=>'delete customer']);

        Permission::create(['name'=>'create users']);
        Permission::create(['name'=>'read users']);
        Permission::create(['name'=>'update users']);
        Permission::create(['name'=>'delete users']);

        $roleAdmin =Role::create(['name'=>'admin']);
        $roleCashier=Role::create(['name'=>'cashier']);

        $roleAdmin->givePermissionTo([
            'create customer',
            'read customer',
            'update customer',
            'delete customer',
            'create users',
            'read users',
            'update users',
            'delete users'
        ]);

        $roleCashier->givePermissionTo([
            'read customer'
        ]);

    }
}

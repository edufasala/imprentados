<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role1 = Role::create(['name' => 'Admin']);
        // $role2 = Role::create(['name' => 'Empleado']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Empleado']);
        Role::create(['name' => 'Cliente']);

        // $permission = Permission::create(['name' => 'edit articles']);
    }
}

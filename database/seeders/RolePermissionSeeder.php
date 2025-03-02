<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);

        Permission::create(['name' => 'admin-blogs']);
        Permission::create(['name' => 'admin-posts']);
        Permission::create(['name' => 'admin-users']);

        $roleAdmin = Role::findByName('admin');

        $roleAdmin->givePermissionTo('admin-blogs');
        $roleAdmin->givePermissionTo('admin-posts');
        $roleAdmin->givePermissionTo('admin-users');
    }
}

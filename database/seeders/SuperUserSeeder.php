<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'blocked_at' => null,
        ];

        $permission = [
            'admin-users',
            'admin-blogs',
            'admin-posts'
        ];

        $newUser = User::create($data);
        $newUser->syncPermissions($permission);

    }
}

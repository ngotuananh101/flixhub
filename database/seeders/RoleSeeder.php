<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super-admin',
                'can_delete' => false,
            ],
            [
                'name' => 'admin',
                'can_delete' => false,
            ],
            [
                'name' => 'user',
                'can_delete' => false,
            ],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }

        // Assign all permissions to super-admin
        $superAdmin = \App\Models\Role::where('name', 'super-admin')->first();
        $permissions = \App\Models\Permission::all();
        $superAdmin->permissions()->attach($permissions);

        // Assign super-admin role to the second user
        $user = \App\Models\User::find(2);
        $user->roles()->attach($superAdmin);
    }
}

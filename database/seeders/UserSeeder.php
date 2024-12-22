<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // System user for logging
        User::factory()->create([
            'email' => 'system@gmail.com',
        ]);

        // Admin user
        User::factory()->create([
            'email' => 'ngotuananh2101@gmail.com',
        ]);

        // Normal user
        User::factory()->create([
            'email' => 'user@gmail.com',
        ]);
    }
}

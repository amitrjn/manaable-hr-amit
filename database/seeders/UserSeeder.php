<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test users for each role
        $admin = \App\Models\Role::where('slug', 'admin')->first();
        $manager = \App\Models\Role::where('slug', 'manager')->first();
        $member = \App\Models\Role::where('slug', 'member')->first();

        \App\Models\User::create([
            'name' => 'System Admin',
            'email' => 'admin@manaablehr.com',
            'password' => bcrypt('password'),
            'role_id' => $admin->id,
            'email_verified_at' => now(),
        ]);

        \App\Models\User::create([
            'name' => 'HR Manager',
            'email' => 'manager@manaablehr.com',
            'password' => bcrypt('password'),
            'role_id' => $manager->id,
            'email_verified_at' => now(),
        ]);

        \App\Models\User::create([
            'name' => 'Team Member',
            'email' => 'member@manaablehr.com',
            'password' => bcrypt('password'),
            'role_id' => $member->id,
            'email_verified_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'phone' => '1234567890',
            'bio' => 'Super Admin Bio',
            'role' => 'superadmin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'bio' => 'Admin Bio',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}

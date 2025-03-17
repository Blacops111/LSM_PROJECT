<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create an admin/teacher user
        User::create([
            'name' => 'Admin Teacher',
            'email' => 'admin@lms.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        // Create some student users
        User::factory(10)->create(['role' => 'student']);
    }
}

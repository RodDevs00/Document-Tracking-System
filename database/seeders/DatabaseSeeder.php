<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
    
        User::factory()->create([
            'first_name' => 'Test',
            'middle_name' => 'User',
            'last_name' => 'Admin',
            'office_division' => 'IT Department',
            'email' => 'test@example.com',
            'password' => Hash::make('admin123'),
            'is_admin' => 1, // Ensure this user is an admin
        ]);
    }
    
}

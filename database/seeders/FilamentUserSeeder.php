<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Filament\Models\User;

class FilamentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a sample Filament user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Use bcrypt to hash the password
        ]);

        // You can add more users as needed
    }
}

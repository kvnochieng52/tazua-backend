<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin test user
        User::create([
            'name' => 'Tazua Admin',
            'email' => 'info@tazua.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Co!nt@nt254'), // Use a secure password
        ]);

        echo "Test user created successfully!\n";
        echo "Email: info@tazua.com\n";
        echo "Password: password\n";
    }
}

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
            'name' => 'Kevin Ochieng',
            'email' => 'kvnochieng52@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        echo "Test user created successfully!\n";
        echo "Email: kvnochieng52@gmail.com\n";
        echo "Password: password\n";
    }
}

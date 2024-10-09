<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;



class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected static ?string $password;

    public function run(): void
    {

        User::create([
         
            'name' => 'guest',
            'role' => '0',
            'email' => 'guest@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Guest@123'),
        ]);

        User::create([
            'name' => 'admin',
            'role' => '1',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin@123'),
        ]);
    }
}

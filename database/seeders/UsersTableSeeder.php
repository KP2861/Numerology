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

        User::create(array('name' => 'admin', 'role' => '1', 'email' => 'admin@example.com', 'email_verified_at' => now(),
        'password' => 'Admin@123',));
                            
   
   
                    
    }
}

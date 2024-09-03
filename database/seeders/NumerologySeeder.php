<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class NumerologySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Numerology::create(
                [

                    'name' => 'Name Numerology',
                    'numerology_type' => '1',
                    
                ],
                [
                    'name' => 'Mobile Numerology',
                    'numerology_type' => '2',
                    
                ], [
                    'name' => 'Advanced Numerology',
                    'numerology_type' => '3',
                    
                ], [
                    'name' => 'Business Numerology',
                    'numerology_type' => '4',
                    
                ], [
                    'name' => 'Number Numerology',
                    'numerology_type' => '5',
                    
                ],
              
              
              
              
              
              
            
            
            );
    }
}

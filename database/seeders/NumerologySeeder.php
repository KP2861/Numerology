<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Numerology;

class NumerologySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


    $data = [
        ['name' => 'Name Numerology','numerology_type' => '1'],
        ['name' => 'Mobile Numerology','numerology_type' => '2'], 
        ['name' => 'Advanced Numerology','numerology_type' => '3'],
        ['name' => 'Business Numerology','numerology_type' => '4'],
        ['name' => 'Number Numerology','numerology_type' => '5'],
       
    ];

    Numerology::insert($data);
               
     }
}

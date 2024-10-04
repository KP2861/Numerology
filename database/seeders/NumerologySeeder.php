<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Numerology;

class NumerologySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Name Numerology', 'numerology_type' => '1', 'packages_amount' => 200],
            ['name' => 'Mobile Numerology', 'numerology_type' => '2', 'packages_amount' => 300],
            ['name' => 'Advanced Numerology', 'numerology_type' => '3', 'packages_amount' => 500],
            ['name' => 'Business Numerology', 'numerology_type' => '4', 'packages_amount' => 500],
            ['name' => 'Number Numerology', 'numerology_type' => '5', 'packages_amount' => 200],
        ];




        Numerology::insert($data);
    }
}

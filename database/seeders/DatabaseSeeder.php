<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AreaOfStrugle::class,
            BussinessList::class,
            CharacterDetailSeeder::class,
            CrystalDetails::class,
            DashaSeeder::class,
            DateDetailSeeder::class,
            MobileCombinationDetailsSeeder::class,
            MobileNumberCompoundDetail::class,
            MultiAlphabetOccurance::class,
            MultiCountDOBSeeder::class,
            MultiCountSeeder::class,
            NameNumberTotalSeeder::class,
            NumerologySeeder::class,
            UsersTableSeeder::class,
            WordAndCombination::class,
        ]);
    }
}

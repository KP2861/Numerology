<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobileCombinationDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['combination_number' => 12, 'type' => 'Benific', 'message' => 'Attractive face, saving person, Helpful life partner'],
            ['combination_number' => 37, 'type' => 'Benific', 'message' => 'Complete personality, person would be able to take benefit from knowledge'],
            ['combination_number' => 73, 'type' => 'Benific', 'message' => 'Complete personality, person would be able to take benefit from knowledge'],
            ['combination_number' => 15, 'type' => 'Benific', 'message' => 'Father\'s popularity, Generally these people make their father famous (good cause)'],
            ['combination_number' => 51, 'type' => 'Benific', 'message' => 'Father\'s popularity, Generally these people make their father famous (good cause)'],
            ['combination_number' => 33, 'type' => 'Benific', 'message' => 'Care of elders, person is famous in old age also.'],
            ['combination_number' => 66, 'type' => 'Benific', 'message' => 'Care of elders, person is famous in old age also.'],
            ['combination_number' => 39, 'type' => 'Benific', 'message' => 'Person is active and good looking.'],
            ['combination_number' => 93, 'type' => 'Benific', 'message' => 'Person is active and good looking.'],
            ['combination_number' => 14, 'type' => 'Benific', 'message' => 'Attractive voice. These people are capable of winning the heart of others.'],
            ['combination_number' => 41, 'type' => 'Benific', 'message' => 'Attractive voice. These people are capable of winning the heart of others.'],
            ['combination_number' => 32, 'type' => 'Benific', 'message' => 'Person is of sacrificing nature and always ready to help others.'],
            ['combination_number' => 56, 'type' => 'Benific', 'message' => 'Person is of sacrificing nature and always ready to help others.'],
            ['combination_number' => 65, 'type' => 'Benific', 'message' => 'Person is of sacrificing nature and always ready to help others.'],
            ['combination_number' => 47, 'type' => 'Benific', 'message' => 'These people can understand the feelings of others very easily and they can achieve success in business and service as well.'],
            ['combination_number' => 74, 'type' => 'Benific', 'message' => 'These people can understand the feelings of others very easily and they can achieve success in business and service as well.'],
            ['combination_number' => 23, 'type' => 'Benific', 'message' => 'Sudden profits, Sudden gain in business, higher posts in service, can receive good news from all directions.'],
            ['combination_number' => 32, 'type' => 'Benific', 'message' => 'Sudden profits, Sudden gain in business, higher posts in service, can receive good news from all directions.'],
            ['combination_number' => 72, 'type' => 'Benific', 'message' => 'Sudden profits, Sudden gain in business, higher posts in service, can receive good news from all directions.'],
            ['combination_number' => 11, 'type' => 'Malefic', 'message' => 'Suicidal tendencies, home accidents, and fights at home.'],
            ['combination_number' => 29, 'type' => 'Malefic', 'message' => 'Suicidal tendencies, home accidents, and fights at home.'],
            ['combination_number' => 74, 'type' => 'Malefic', 'message' => 'Suicidal tendencies, home accidents, and fights at home.'],
            ['combination_number' => 83, 'type' => 'Malefic', 'message' => 'These people always see struggle in life, especially financial.'],
            ['combination_number' => 47, 'type' => 'Malefic', 'message' => 'These people always see struggle in life, especially financial.'],
            ['combination_number' => 56, 'type' => 'Malefic', 'message' => 'These people always see struggle in life, especially financial.'],
            ['combination_number' => 65, 'type' => 'Malefic', 'message' => 'These people always see struggle in life, especially financial.'],
            ['combination_number' => 29, 'type' => 'Malefic', 'message' => 'Overwork, always busy in work, unable to do anything without hard work.'],
            ['combination_number' => 47, 'type' => 'Malefic', 'message' => 'Overwork, always busy in work, unable to do anything without hard work.'],
            ['combination_number' => 56, 'type' => 'Malefic', 'message' => 'Overwork, always busy in work, unable to do anything without hard work.'],
            ['combination_number' => 92, 'type' => 'Malefic', 'message' => 'Overwork, always busy in work, unable to do anything without hard work.'],
            ['combination_number' => 35, 'type' => 'Malefic', 'message' => 'Loss in love affairs, separations, distances in marriage relations, separation from the family at the age of 26.'],
            ['combination_number' => 53, 'type' => 'Malefic', 'message' => 'Loss in love affairs, separations, distances in marriage relations, separation from the family at the age of 26.'],
            ['combination_number' => 67, 'type' => 'Malefic', 'message' => 'Loss in love affairs, separations, distances in marriage relations, separation from the family at the age of 26.'],
            ['combination_number' => 76, 'type' => 'Malefic', 'message' => 'Loss in love affairs, separations, distances in marriage relations, separation from the family at the age of 26.'],
            ['combination_number' => 44, 'type' => 'Malefic', 'message' => 'Always worried about finances, constant tension about money, endless expenses.'],
            ['combination_number' => 62, 'type' => 'Malefic', 'message' => 'Always worried about finances, constant tension about money, endless expenses.'],
            ['combination_number' => 88, 'type' => 'Malefic', 'message' => 'Always worried about finances, constant tension about money, endless expenses.'],
            ['combination_number' => 19, 'type' => 'Malefic', 'message' => 'They may see sudden trouble, unexpected events that will disturb them for a long time.'],
            ['combination_number' => 91, 'type' => 'Malefic', 'message' => 'They may see sudden trouble, unexpected events that will disturb them for a long time.'],
            ['combination_number' => 16, 'type' => 'Malefic', 'message' => 'Health issues, especially stomach-related problems.'],
            ['combination_number' => 61, 'type' => 'Malefic', 'message' => 'Health issues, especially stomach-related problems.'],
            ['combination_number' => 82, 'type' => 'Malefic', 'message' => 'Health issues, especially stomach-related problems.'],
            ['combination_number' => 68, 'type' => 'Malefic', 'message' => 'Health issues, especially stomach-related problems.'],
            ['combination_number' => 25, 'type' => 'Neutral', 'message' => 'Little bit of stress about finances. These people generally succeed in life.'],
            ['combination_number' => 52, 'type' => 'Neutral', 'message' => 'Little bit of stress about finances. These people generally succeed in life.'],
            ['combination_number' => 97, 'type' => 'Neutral', 'message' => 'Little bit of stress about finances. These people generally succeed in life.'],
            ['combination_number' => 89, 'type' => 'Neutral', 'message' => 'Good relationships and bonding with children.'],
            ['combination_number' => 98, 'type' => 'Neutral', 'message' => 'Good relationships and bonding with children.'],
            ['combination_number' => 28, 'type' => 'Neutral', 'message' => 'Worried about reputation, little concern about children\'s happiness.'],
            ['combination_number' => 82, 'type' => 'Neutral', 'message' => 'Worried about reputation, little concern about children\'s happiness.'],
            ['combination_number' => 36, 'type' => 'Neutral', 'message' => 'Person is spiritual and may be involved in religious activities.'],
            ['combination_number' => 63, 'type' => 'Neutral', 'message' => 'Person is spiritual and may be involved in religious activities.'],
            ['combination_number' => 81, 'type' => 'Neutral', 'message' => 'Person is spiritual and may be involved in religious activities.'],
            ['combination_number' => 27, 'type' => 'Neutral', 'message' => 'Little bit of stress about finances. These people generally succeed in life.'],
            ['combination_number' => 72, 'type' => 'Neutral', 'message' => 'Little bit of stress about finances. These people generally succeed in life.'],
        ];

        DB::table('mobile_combination_details')->insert($data);
    }
}

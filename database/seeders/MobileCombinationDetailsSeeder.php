<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobileCombinationDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'combination_number' => '12',
                'type' => 'Benific',
                'message' => 'Attractive face, saving person, Helpful life partner '
            ],
            [
                'combination_number' => '37',
                'type' => 'Benific',
                'message' => 'Complete personality, person would be able to take benefit from knowledge '
            ],
            [
                'combination_number' => '73',
                'type' => 'Benific',
                'message' => 'Complete personality, person would be able to take benefit from knowledge '
            ],
            [
                'combination_number' => '15',
                'type' => 'Benific',
                'message' => 'Father\'s popularity, Generally these people make their father famous (good cause) '
            ],
            [
                'combination_number' => '51',
                'type' => 'Benific',
                'message' => 'Father\'s popularity, Generally these people make their father famous (good cause) '
            ],
            [
                'combination_number' => '13',
                'type' => 'Benific',
                'message' => 'Good Advisor, Good Education, Respectful and Popular, Special in his circle, 31 combination makes person Professional '
            ],
            [
                'combination_number' => '31',
                'type' => 'Benific',
                'message' => 'Good Advisor, Good Education, Respectful and Popular, Special in his circle, 31 combination makes person Professional '
            ],
            [
                'combination_number' => '69',
                'type' => 'Benific',
                'message' => 'Good management skill, Good Planner, Opposite Sex involvement '
            ],
            [
                'combination_number' => '96',
                'type' => 'Benific',
                'message' => 'Good management skill, Good Planner, Opposite Sex involvement '
            ],
            [
                'combination_number' => '25',
                'type' => 'Benific',
                'message' => 'Hath me Shaffa, Can work in occult science/Medical line, One who gives Bail to others, Success through Air-Travel, Try to avoid stuff related to Finance '
            ],
            [
                'combination_number' => '52',
                'type' => 'Benific',
                'message' => 'Hath me Shaffa, Can work in occult science/Medical line, One who gives Bail to others, Success through Air-Travel, Try to avoid stuff related to Finance '
            ],
            [
                'combination_number' => '78',
                'type' => 'Benific',
                'message' => 'Healer, Idealistic, Solve any problem by own power '
            ],
            [
                'combination_number' => '87',
                'type' => 'Benific',
                'message' => 'Healer, Idealistic, Solve any problem by own power '
            ],
            [
                'combination_number' => '47',
                'type' => 'Benific',
                'message' => 'Honest, Brilliant, gives importance of Integrity, Rahu-Ketu Combo '
            ],
            [
                'combination_number' => '74',
                'type' => 'Benific',
                'message' => 'Honest, Brilliant, gives importance of Integrity, Rahu-Ketu Combo '
            ],
            [
                'combination_number' => '29',
                'type' => 'Benific',
                'message' => 'Person have decent amount of Money, Live happily on the money of Someone else, Native might become egoistic, If DOB 29 Relationship issues '
            ],
            [
                'combination_number' => '92',
                'type' => 'Benific',
                'message' => 'Person have decent amount of Money, Live happily on the money of Someone else, Native might become egoistic, If DOB 29 Relationship issues '
            ],
            [
                'combination_number' => '38',
                'type' => 'Benific',
                'message' => 'Real Estate, Counsellor, Peacemaker or mediator between Two parties '
            ],
            [
                'combination_number' => '83',
                'type' => 'Benific',
                'message' => 'Real Estate, Counsellor, Peacemaker or mediator between Two parties '
            ],
            [
                'combination_number' => '57',
                'type' => 'Benific',
                'message' => 'Speaker, writer, Public relation, Good Expressive person, Lot of person comes to them for Advice '
            ],
            [
                'combination_number' => '75',
                'type' => 'Benific',
                'message' => 'Speaker, writer, Public relation, Good Expressive person, Lot of person comes to them for Advice '
            ],
            [
                'combination_number' => '16',
                'type' => 'Malefic',
                'message' => '(Most Negative) Spouse health issues, married life issues, income confined (Owners have less income at the time of having this mo. No.) '
            ],
            [
                'combination_number' => '61',
                'type' => 'Malefic',
                'message' => '(Most Negative) Spouse health issues, married life issues, income confined (Owners have less income at the time of having this mo. No.) '
            ],
            [
                'combination_number' => '48',
                'type' => 'Malefic',
                'message' => '(Very Negative) Blood related disease, Incurable problems, Deficiency in sexual pleasure '
            ],
            [
                'combination_number' => '84',
                'type' => 'Malefic',
                'message' => '(Very Negative) Blood related disease, Incurable problems, Deficiency in sexual pleasure '
            ],
            [
                'combination_number' => '18',
                'type' => 'Malefic',
                'message' => '(Very Negative) Spouse health issue, understanding issues in father & son, Govt. related issue, change in job frequently '
            ],
            [
                'combination_number' => '81',
                'type' => 'Malefic',
                'message' => '(Very Negative) Spouse health issue, understanding issues in father & son, Govt. related issue, change in job frequently '
            ],
            [
                'combination_number' => '89',
                'type' => 'Malefic',
                'message' => 'Argumentative, Works with Principle, Person might get chronic issue in later part of life '
            ],
            [
                'combination_number' => '98',
                'type' => 'Malefic',
                'message' => 'Argumentative, Works with Principle, Person might get chronic issue in later part of life '
            ],
            [
                'combination_number' => '26',
                'type' => 'Malefic',
                'message' => 'Barrier in Studies or Break in education , Girl- Problem with mother in law, Attraction towards money or opposite sex, Chances of less Sperm count or Diabetes '
            ],
            [
                'combination_number' => '62',
                'type' => 'Malefic',
                'message' => 'Barrier in Studies or Break in education , Girl- Problem with mother in law, Attraction towards money or opposite sex, Chances of less Sperm count or Diabetes '
            ],
            [
                'combination_number' => '67',
                'type' => 'Malefic',
                'message' => 'Chances of Love marriage, Issue in Spouse health, Chances of disturbed married life '
            ],
            [
                'combination_number' => '76',
                'type' => 'Malefic',
                'message' => 'Chances of Love marriage, Issue in Spouse health, Chances of disturbed married life '
            ],
            [
                'combination_number' => '46',
                'type' => 'Malefic',
                'message' => 'Extra relationship, Inter-cast marriage, UT infection '
            ],
            [
                'combination_number' => '64',
                'type' => 'Malefic',
                'message' => 'Extra relationship, Inter-cast marriage, UT infection '
            ],
            [
                'combination_number' => '68',
                'type' => 'Malefic',
                'message' => 'Eye Problem, Issue in any one organ of Body… If multiple 1 in DOB than don’t recommend this combo '
            ],
            [
                'combination_number' => '86',
                'type' => 'Malefic',
                'message' => 'Eye Problem, Issue in any one organ of Body… If multiple 1 in DOB than don’t recommend this combo '
            ],
            [
                'combination_number' => '23',
                'type' => 'Malefic',
                'message' => 'Generally many enemy but none of them will be able to harm he native '
            ],
            [
                'combination_number' => '32',
                'type' => 'Malefic',
                'message' => 'Generally many enemy but none of them will be able to harm he native '
            ],
            [
                'combination_number' => '27',
                'type' => 'Malefic',
                'message' => 'Good intuition, Joint pain Or Urine related disease, Arthritis (Vaat Issue) '
            ],
            [
                'combination_number' => '72',
                'type' => 'Malefic',
                'message' => 'Good intuition, Joint pain Or Urine related disease, Arthritis (Vaat Issue) '
            ],
            [
                'combination_number' => '34',
                'type' => 'Malefic',
                'message' => 'Legs shivering, Paralysis to someone in the family, Breathing related issues to person, if DOB has 3 or more times 8 than don\'t take this combo '
            ],
            [
                'combination_number' => '43',
                'type' => 'Malefic',
                'message' => 'Legs shivering, Paralysis to someone in the family, Breathing related issues to person, if DOB has 3 or more times 8 than don\'t take this combo '
            ],
            [
                'combination_number' => '45',
                'type' => 'Malefic',
                'message' => 'Needs to visit Hospital visits for different medical reasons and Court for different issues, Life with Restrictions '
            ],
            [
                'combination_number' => '54',
                'type' => 'Malefic',
                'message' => 'Needs to visit Hospital visits for different medical reasons and Court for different issues, Life with Restrictions '
            ],
            [
                'combination_number' => '14',
                'type' => 'Malefic',
                'message' => 'Person can get attracted to Loan liabilities, Legal Notice, Health issues, Hard work, Toughness Number '
            ],
            [
                'combination_number' => '41',
                'type' => 'Malefic',
                'message' => 'Person can get attracted to Loan liabilities, Legal Notice, Health issues, Hard work, Toughness Number '
            ],
            [
                'combination_number' => '28',
                'type' => 'Malefic',
                'message' => 'Person have decent amount of Money, Excessive Medical/Hospital Expenditure, 2 marriage s in the Family, Try to avoid Bad company it can Harm you, Vish yog '
            ],
            [
                'combination_number' => '82',
                'type' => 'Malefic',
                'message' => 'Person have decent amount of Money, Excessive Medical/Hospital Expenditure, 2 marriage s in the Family, Try to avoid Bad company it can Harm you, Vish yog '
            ],
            [
                'combination_number' => '21',
                'type' => 'Neutral',
                'message' => 'Attractive face, waste of Money '
            ],
            [
                'combination_number' => '91',
                'type' => 'Neutral',
                'message' => 'Attractive face, waste of Money '
            ],
            [
                'combination_number' => '59',
                'type' => 'Neutral',
                'message' => 'Destroy relationship through Bad speech , Person opt for Science or commerce stream '
            ],
            [
                'combination_number' => '95',
                'type' => 'Neutral',
                'message' => 'Destroy relationship through Bad speech , Person opt for Science or commerce stream '
            ],
            [
                'combination_number' => '49',
                'type' => 'Neutral',
                'message' => 'Do risky work , Uniform work, Criminal minded '
            ],
            [
                'combination_number' => '94',
                'type' => 'Neutral',
                'message' => 'Do risky work , Uniform work, Criminal minded '
            ],
            [
                'combination_number' => '56',
                'type' => 'Neutral',
                'message' => 'Hesitate to ask own money, Apke ghar ke pass koi big landmark he kya Mandir/Superstore, Business minded '
            ],
            [
                'combination_number' => '65',
                'type' => 'Neutral',
                'message' => 'Hesitate to ask own money, Apke ghar ke pass koi big landmark he kya Mandir/Superstore, Business minded '
            ],
            [
                'combination_number' => '24',
                'type' => 'Neutral',
                'message' => 'Keep patience to achieve something, Makes different plans and brain actively processing those plans, negative/destructive thinking '
            ],
            [
                'combination_number' => '42',
                'type' => 'Neutral',
                'message' => 'Keep patience to achieve something, Makes different plans and brain actively processing those plans, negative/destructive thinking '
            ],
            [
                'combination_number' => '39',
                'type' => 'Neutral',
                'message' => 'Loves to show-off, Person will have a lots of Duality in nature '
            ],
            [
                'combination_number' => '93',
                'type' => 'Neutral',
                'message' => 'Loves to show-off, Person will have a lots of Duality in nature '
            ],
            [
                'combination_number' => '17',
                'type' => 'Neutral',
                'message' => 'Money related work is never stopped, There is someone in close circle who is in Govt. job, Person might be working in MNC and getting good facilities ex private- Good facilities/Work from Home, Chances of 2 Marriage , More profit from Lying, If DOB has many 7, than don\'t chose this combo, If 2,5,6 missing in DOB and Mobile has 17/71 will give major relationship issues '
            ],
            [
                'combination_number' => '71',
                'type' => 'Neutral',
                'message' => 'Money related work is never stopped, There is someone in close circle who is in Govt. job, Person might be working in MNC and getting good facilities ex private- Good facilities/Work from Home, Chances of 2 Marriage , More profit from Lying, If DOB has many 7, than don\'t chose this combo, If 2,5,6 missing in DOB and Mobile has 17/71 will give major relationship issues '
            ],
            [
                'combination_number' => '58',
                'type' => 'Neutral',
                'message' => 'Money stuck , Calculated mind, Person doing some work related to Money/Finance, Talks about Lakhs and Crores '
            ],
            [
                'combination_number' => '85',
                'type' => 'Neutral',
                'message' => 'Money stuck , Calculated mind, Person doing some work related to Money/Finance, Talks about Lakhs and Crores '
            ],
            [
                'combination_number' => '36',
                'type' => 'Neutral',
                'message' => 'More of Principal oriented person, Barrier in Studies , Good knowledge but native will struggle in presentation '
            ],
            [
                'combination_number' => '63',
                'type' => 'Neutral',
                'message' => 'More of Principal oriented person, Barrier in Studies , Good knowledge but native will struggle in presentation '
            ],
            [
                'combination_number' => '35',
                'type' => 'Neutral',
                'message' => 'Native gets success away from Home, Fear of Father, Hence Successful, Good Economical Condition, Liquid money problem '
            ],
            [
                'combination_number' => '53',
                'type' => 'Neutral',
                'message' => 'Native gets success away from Home, Fear of Father, Hence Successful, Good Economical Condition, Liquid money problem '
            ],
            [
                'combination_number' => '79',
                'type' => 'Neutral',
                'message' => 'Success after separation from Father '
            ],
            [
                'combination_number' => '97',
                'type' => 'Neutral',
                'message' => 'Success after separation from Father '
            ],
            [
                'combination_number' => '19',
                'type' => 'Neutral',
                'message' => 'You own what u want, Always on a high place, Professional person, Rasukhdar, Freedom Lover '
            ],
            [
                'combination_number' => '99',
                'type' => 'Neutral',
                'message' => 'This number combination may indicate challenges with debts, anger management, and health issues related to blood. The red tone in skin color could be a subtle sign. Children with this combination may inherit or face similar issues, particularly in managing emotions and finances.'
            ],
            [
                'combination_number' => '66',
                'type' => 'Benific',
                'message' => 'Individuals with this combination are likely to have a deep love for luxury and comfort. They enjoy traveling and experiencing new places. However, they may occasionally face restrictions, finding themselves unable to access these luxuries or comforts when most needed.'
            ],
            [
                'combination_number' => '55',
                'type' => 'Benific',
                'message' => 'This combination suggests a tendency towards laziness and procrastination. However, it also brings increased opportunities in communication and financial growth. The person may experience sudden boosts in wealth and may find themselves more articulate or influential in discussions.'
            ],
            [
                'combination_number' => '33',
                'type' => 'Benific',
                'message' => 'Those with this number are driven by a thirst for knowledge, constantly seeking to learn and understand more. However, they may struggle with staying grounded, often being lost in thoughts or ideas without focusing on practical applications.'
            ],
            [
                'combination_number' => '22',
                'type' => 'Malefic',
                'message' => 'This number can lead to mood swings, depression, and excessive emotional sensitivity. Individuals may face blood pressure problems, particularly if their name starts with B, K, or R. These emotional challenges could be exacerbated by minor triggers, leading to significant internal turmoil.'
            ],
            [
                'combination_number' => '44',
                'type' => 'Malefic',
                'message' => 'Represents delays and struggles, often manifesting as obstacles in achieving goals. Those with this combination might suffer from chronic headaches and persistent challenges in their pursuits. Patience and perseverance are necessary to overcome these hurdles.'
            ],
            [
                'combination_number' => '77',
                'type' => 'Malefic',
                'message' => 'Indicates a tendency towards mood swings and internal conflicts. The person may seek spiritual growth as a way to manage overthinking and anxiety. This combination often leads to an inward journey, where spiritual practices become essential to maintain mental balance.'
            ],
            [
                'combination_number' => '88',
                'type' => 'Malefic',
                'message' => 'Signifies delays and disturbances, with frequent obstacles hindering progress. Individuals with this number might face recurring issues, whether in personal or professional life, leading to frustration. Persistence is key to navigating these challenges.'
            ],
            [
                'combination_number' => '11',
                'type' => 'Neutral',
                'message' => 'This combination brings heightened emotions, often leading to ego clashes or stubborn attitudes. Individuals may speak quickly, sometimes leading to misunderstandings. Effective communication skills are crucial to ensure their words are understood as intended.'
            ]
        ];

        DB::table('mobile_combination_details')->insert($data);
    }
}

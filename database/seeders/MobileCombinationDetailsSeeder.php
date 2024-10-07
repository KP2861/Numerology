<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobileCombinationdetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'combination_number' => '12',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Attractive face, saving person, Helpful life partner '
            ],
            [
                'combination_number' => '37',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Complete personality, person would be able to take benefit from knowledge '
            ],
            [
                'combination_number' => '73',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Complete personality, person would be able to take benefit from knowledge '
            ],
            [
                'combination_number' => '15',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Father\'s popularity, Generally these people make their father famous (good cause) '
            ],
            [
                'combination_number' => '51',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Father\'s popularity, Generally these people make their father famous (good cause) '
            ],
            [
                'combination_number' => '13',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Good Advisor, Good Education, Respectful and Popular, Special in his circle, 31 combination makes person Professional '
            ],
            [
                'combination_number' => '31',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Good Advisor, Good Education, Respectful and Popular, Special in his circle, 31 combination makes person Professional '
            ],
            [
                'combination_number' => '69',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Good management skill, Good Planner, Opposite Sex involvement '
            ],
            [
                'combination_number' => '96',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Good management skill, Good Planner, Opposite Sex involvement '
            ],
            [
                'combination_number' => '25',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Hath me Shaffa, Can work in occult science/Medical line, One who gives Bail to others, Success through Air-Travel, Try to avoid stuff related to Finance '
            ],
            [
                'combination_number' => '52',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Hath me Shaffa, Can work in occult science/Medical line, One who gives Bail to others, Success through Air-Travel, Try to avoid stuff related to Finance '
            ],
            [
                'combination_number' => '78',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Healer, Idealistic, Solve any problem by own power '
            ],
            [
                'combination_number' => '87',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Healer, Idealistic, Solve any problem by own power '
            ],
            [
                'combination_number' => '47',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Honest, Brilliant, gives importance of Integrity, Rahu-Ketu Combo '
            ],
            [
                'combination_number' => '74',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Honest, Brilliant, gives importance of Integrity, Rahu-Ketu Combo '
            ],
            [
                'combination_number' => '29',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Person have decent amount of Money, Live happily on the money of Someone else, Native might become egoistic, If DOB 29 Relationship issues '
            ],
            [
                'combination_number' => '92',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Person have decent amount of Money, Live happily on the money of Someone else, Native might become egoistic, If DOB 29 Relationship issues '
            ],
            [
                'combination_number' => '38',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Real Estate, Counsellor, Peacemaker or mediator between Two parties '
            ],
            [
                'combination_number' => '83',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Real Estate, Counsellor, Peacemaker or mediator between Two parties '
            ],
            [
                'combination_number' => '57',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Speaker, writer, Public relation, Good Expressive person, Lot of person comes to them for Advice '
            ],
            [
                'combination_number' => '75',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Speaker, writer, Public relation, Good Expressive person, Lot of person comes to them for Advice '
            ],
            [
                'combination_number' => '16',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Most Negative) Spouse health issues, married life issues, income confined (Owners have less income at the time of having this mo. No.) '
            ],
            [
                'combination_number' => '61',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Most Negative) Spouse health issues, married life issues, income confined (Owners have less income at the time of having this mo. No.) '
            ],
            [
                'combination_number' => '48',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Very Negative) Blood related disease, Incurable problems, Deficiency in sexual pleasure '
            ],
            [
                'combination_number' => '84',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Very Negative) Blood related disease, Incurable problems, Deficiency in sexual pleasure '
            ],
            [
                'combination_number' => '18',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Very Negative) Spouse health issue, understanding issues in father & son, Govt. related issue, change in job frequently '
            ],
            [
                'combination_number' => '81',
                'behaviour_of_combination' => 'Malefic',
                'details' => '(Very Negative) Spouse health issue, understanding issues in father & son, Govt. related issue, change in job frequently '
            ],
            [
                'combination_number' => '89',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Argumentative, Works with Principle, Person might get chronic issue in later part of life '
            ],
            [
                'combination_number' => '98',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Argumentative, Works with Principle, Person might get chronic issue in later part of life '
            ],
            [
                'combination_number' => '26',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Barrier in Studies or Break in education , Girl- Problem with mother in law, Attraction towards money or opposite sex, Chances of less Sperm count or Diabetes '
            ],
            [
                'combination_number' => '62',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Barrier in Studies or Break in education , Girl- Problem with mother in law, Attraction towards money or opposite sex, Chances of less Sperm count or Diabetes '
            ],
            [
                'combination_number' => '67',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Chances of Love marriage, Issue in Spouse health, Chances of disturbed married life '
            ],
            [
                'combination_number' => '76',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Chances of Love marriage, Issue in Spouse health, Chances of disturbed married life '
            ],
            [
                'combination_number' => '46',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Extra relationship, Inter-cast marriage, UT infection '
            ],
            [
                'combination_number' => '64',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Extra relationship, Inter-cast marriage, UT infection '
            ],
            [
                'combination_number' => '68',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Eye Problem, Issue in any one organ of Body… If multiple 1 in DOB than don’t recommend this combo '
            ],
            [
                'combination_number' => '86',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Eye Problem, Issue in any one organ of Body… If multiple 1 in DOB than don’t recommend this combo '
            ],
            [
                'combination_number' => '23',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Generally many enemy but none of them will be able to harm he native '
            ],
            [
                'combination_number' => '32',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Generally many enemy but none of them will be able to harm he native '
            ],
            [
                'combination_number' => '27',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Good intuition, Joint pain Or Urine related disease, Arthritis (Vaat Issue) '
            ],
            [
                'combination_number' => '72',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Good intuition, Joint pain Or Urine related disease, Arthritis (Vaat Issue) '
            ],
            [
                'combination_number' => '34',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Legs shivering, Paralysis to someone in the family, Breathing related issues to person, if DOB has 3 or more times 8 than don\'t take this combo '
            ],
            [
                'combination_number' => '43',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Legs shivering, Paralysis to someone in the family, Breathing related issues to person, if DOB has 3 or more times 8 than don\'t take this combo '
            ],
            [
                'combination_number' => '45',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Needs to visit Hospital visits for different medical reasons and Court for different issues, Life with Restrictions '
            ],
            [
                'combination_number' => '54',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Needs to visit Hospital visits for different medical reasons and Court for different issues, Life with Restrictions '
            ],
            [
                'combination_number' => '14',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Person can get attracted to Loan liabilities, Legal Notice, Health issues, Hard work, Toughness Number '
            ],
            [
                'combination_number' => '41',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Person can get attracted to Loan liabilities, Legal Notice, Health issues, Hard work, Toughness Number '
            ],
            [
                'combination_number' => '28',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Person have decent amount of Money, Excessive Medical/Hospital Expenditure, 2 marriage s in the Family, Try to avoid Bad company it can Harm you, Vish yog '
            ],
            [
                'combination_number' => '82',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Person have decent amount of Money, Excessive Medical/Hospital Expenditure, 2 marriage s in the Family, Try to avoid Bad company it can Harm you, Vish yog '
            ],
            [
                'combination_number' => '21',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Attractive face, waste of Money '
            ],
            [
                'combination_number' => '91',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Attractive face, waste of Money '
            ],
            [
                'combination_number' => '59',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Destroy relationship through Bad speech , Person opt for Science or commerce stream '
            ],
            [
                'combination_number' => '95',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Destroy relationship through Bad speech , Person opt for Science or commerce stream '
            ],
            [
                'combination_number' => '49',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Do risky work , Uniform work, Criminal minded '
            ],
            [
                'combination_number' => '94',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Do risky work , Uniform work, Criminal minded '
            ],
            [
                'combination_number' => '56',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Hesitate to ask own money, Apke ghar ke pass koi big landmark he kya Mandir/Superstore, Business minded '
            ],
            [
                'combination_number' => '65',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Hesitate to ask own money, Apke ghar ke pass koi big landmark he kya Mandir/Superstore, Business minded '
            ],
            [
                'combination_number' => '24',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Keep patience to achieve something, Makes different plans and brain actively processing those plans, negative/destructive thinking '
            ],
            [
                'combination_number' => '42',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Keep patience to achieve something, Makes different plans and brain actively processing those plans, negative/destructive thinking '
            ],
            [
                'combination_number' => '39',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Loves to show-off, Person will have a lots of Duality in nature '
            ],
            [
                'combination_number' => '93',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Loves to show-off, Person will have a lots of Duality in nature '
            ],
            [
                'combination_number' => '17',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Money related work is never stopped, There is someone in close circle who is in Govt. job, Person might be working in MNC and getting good facilities ex private- Good facilities/Work from Home, Chances of 2 Marriage , More profit from Lying, If DOB has many 7, than don\'t chose this combo, If 2,5,6 missing in DOB and Mobile has 17/71 will give major relationship issues '
            ],
            [
                'combination_number' => '71',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Money related work is never stopped, There is someone in close circle who is in Govt. job, Person might be working in MNC and getting good facilities ex private- Good facilities/Work from Home, Chances of 2 Marriage , More profit from Lying, If DOB has many 7, than don\'t chose this combo, If 2,5,6 missing in DOB and Mobile has 17/71 will give major relationship issues '
            ],
            [
                'combination_number' => '58',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Money stuck , Calculated mind, Person doing some work related to Money/Finance, Talks about Lakhs and Crores '
            ],
            [
                'combination_number' => '85',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Money stuck , Calculated mind, Person doing some work related to Money/Finance, Talks about Lakhs and Crores '
            ],
            [
                'combination_number' => '36',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'More of Principal oriented person, Barrier in Studies , Good knowledge but native will struggle in presentation '
            ],
            [
                'combination_number' => '63',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'More of Principal oriented person, Barrier in Studies , Good knowledge but native will struggle in presentation '
            ],
            [
                'combination_number' => '35',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Native gets success away from Home, Fear of Father, Hence Successful, Good Economical Condition, Liquid money problem '
            ],
            [
                'combination_number' => '53',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Native gets success away from Home, Fear of Father, Hence Successful, Good Economical Condition, Liquid money problem '
            ],
            [
                'combination_number' => '79',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Success after separation from Father '
            ],
            [
                'combination_number' => '97',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'Success after separation from Father '
            ],
            [
                'combination_number' => '19',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'You own what u want, Always on a high place, Professional person, Rasukhdar, Freedom Lover '
            ],
            [
                'combination_number' => '99',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'This number combination may indicate challenges with debts, anger management, and health issues related to blood. The red tone in skin color could be a subtle sign. Children with this combination may inherit or face similar issues, particularly in managing emotions and finances.'
            ],
            [
                'combination_number' => '66',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Individuals with this combination are likely to have a deep love for luxury and comfort. They enjoy traveling and experiencing new places. However, they may occasionally face restrictions, finding themselves unable to access these luxuries or comforts when most needed.'
            ],
            [
                'combination_number' => '55',
                'behaviour_of_combination' => 'Benific',
                'details' => 'This combination suggests a tendency towards laziness and procrastination. However, it also brings increased opportunities in communication and financial growth. The person may experience sudden boosts in wealth and may find themselves more articulate or influential in discussions.'
            ],
            [
                'combination_number' => '33',
                'behaviour_of_combination' => 'Benific',
                'details' => 'Those with this number are driven by a thirst for knowledge, constantly seeking to learn and understand more. However, they may struggle with staying grounded, often being lost in thoughts or ideas without focusing on practical applications.'
            ],
            [
                'combination_number' => '22',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'This number can lead to mood swings, depression, and excessive emotional sensitivity. Individuals may face blood pressure problems, particularly if their name starts with B, K, or R. These emotional challenges could be exacerbated by minor triggers, leading to significant internal turmoil.'
            ],
            [
                'combination_number' => '44',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Represents delays and struggles, often manifesting as obstacles in achieving goals. Those with this combination might suffer from chronic headaches and persistent challenges in their pursuits. Patience and perseverance are necessary to overcome these hurdles.'
            ],
            [
                'combination_number' => '77',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Indicates a tendency towards mood swings and internal conflicts. The person may seek spiritual growth as a way to manage overthinking and anxiety. This combination often leads to an inward journey, where spiritual practices become essential to maintain mental balance.'
            ],
            [
                'combination_number' => '88',
                'behaviour_of_combination' => 'Malefic',
                'details' => 'Signifies delays and disturbances, with frequent obstacles hindering progress. Individuals with this number might face recurring issues, whether in personal or professional life, leading to frustration. Persistence is key to navigating these challenges.'
            ],
            [
                'combination_number' => '11',
                'behaviour_of_combination' => 'Neutral',
                'details' => 'This combination brings heightened emotions, often leading to ego clashes or stubborn attitudes. Individuals may speak quickly, sometimes leading to misunderstandings. Effective communication skills are crucial to ensure their words are understood as intended.'
            ]
        ];

        DB::table('mobile_combination_details')->insert($data);
    }
}

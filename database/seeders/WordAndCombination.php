<?php

namespace Database\Seeders;

use App\Models\WordAndCombination as ModelsWordAndCombination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordAndCombination extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'name' => 'ANT',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Growth and progress',
                'details' => 'Positive growth-oriented sound vibration.'
            ],
            [
                'name' => 'AR',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Never shortage of money',
                'details' => 'This sound attracts wealth and financial stability.'
            ],
            [
                'name' => 'ASH',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Brings problems',
                'details' => '"ASH" has a negative connotation and can bring life problems.'
            ],
            [
                'name' => 'BA',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts abundance and financial prosperity.'
            ],
            [
                'name' => 'CC',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Enhances luck and financial growth.'
            ],
            [
                'name' => 'CG',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Encourages success in business ventures.'
            ],
            [
                'name' => 'CS',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Promotes stability and security in finances.'
            ],
            [
                'name' => 'CV',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Very good life',
                'details' => 'This sound represents leadership, quality, vision is clear, first in everything.'
            ],
            [
                'name' => 'DM',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Strengthens financial prospects and abundance.'
            ],
            [
                'name' => 'EE',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Symbolizes growth and prosperity.'
            ],
            [
                'name' => 'EL',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Enhances career success and financial gains.'
            ],
            [
                'name' => 'ESH',
                'type' => 'Neutral',
                'issues_faced_in_life' => '50% of problems reduced compared to "ASH"',
                'details' => 'Lesser version of the negative impact of "ASH."'
            ],
            [
                'name' => 'HAN',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Brings wealth',
                'details' => '"HAN" helps attract financial success.'
            ],
            [
                'name' => 'Hit',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Power and success',
                'details' => 'Adds power and success to a name.'
            ],
            [
                'name' => 'KS',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Brings financial stability and prosperity.'
            ],
            [
                'name' => 'LG',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts wealth and good fortune.'
            ],
            [
                'name' => 'LL',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Symbolizes prosperity and abundance.'
            ],
            [
                'name' => 'Lo',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Low thinking, negative vibrations',
                'details' => 'The sound "Lo" brings a malefic vibration, leading to low thinking and delays in progress.'
            ],
            [
                'name' => 'LS',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Encourages wealth accumulation and stability.'
            ],
            [
                'name' => 'LV',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts opportunities for financial growth.'
            ],
            [
                'name' => 'MA',
                'type' => 'Natural',
                'issues_faced_in_life' => 'Weak vibration, nature-lover',
                'details' => '"MA" brings a connection with nature, but weak influence overall.'
            ],
            [
                'name' => 'Man',
                'type' => 'Natural',
                'issues_faced_in_life' => 'Manliness for men; bravery for women',
                'details' => 'People with "Man" in their name tend to be manly or strong. Women with this will be strong.'
            ],
            [
                'name' => 'NIL',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Financial and manifestation problems',
                'details' => 'Causes problems in manifesting desires and financial stability.'
            ],
            [
                'name' => 'NO',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Attracts trouble',
                'details' => 'Brings denial and trouble to the person.'
            ],
            [
                'name' => 'OM',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Removes negative energy',
                'details' => 'Strongly benefic, helps remove any negative energy.'
            ],
            [
                'name' => 'ON',
                'type' => 'Malefic for personal, Benefic for business',
                'issues_faced_in_life' => 'Relationship issues for personal names, but good for business success',
                'details' => 'Not recommended for personal names due to relationship problems, but very good for companies.'
            ],
            [
                'name' => 'PK',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Very good life',
                'details' => 'Name, fame & prosperity if PK come together.'
            ],
            [
                'name' => 'PP',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts financial gains and success.'
            ],
            [
                'name' => 'RAM',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Near success but eventual failure',
                'details' => 'Leads to getting close to success but failing at the last moment.'
            ],
            [
                'name' => 'RAN',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Energy drain',
                'details' => 'Causes a loss of energy and vitality.'
            ],
            [
                'name' => 'RAT',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Opportunities',
                'details' => 'Brings opportunities and growth.'
            ],
            [
                'name' => 'REVA',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Strong wealth and success',
                'details' => 'Very strong vibration linked with wealth and success, particularly in money matters.'
            ],
            [
                'name' => 'RP',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts prosperity and abundance.'
            ],
            [
                'name' => 'RUSH',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Speed in tasks',
                'details' => 'Brings rapid progress and speed in tasks or opportunities.'
            ],
            [
                'name' => 'SAD',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Sad events in life',
                'details' => 'Names with "SAD" can bring continuous unfortunate events.'
            ],
            [
                'name' => 'SH',
                'type' => 'Malefic for women, Benefic for oration',
                'issues_faced_in_life' => 'Relationship issues in women',
                'details' => 'Leads to relationship issues for women if present at the beginning of the name. Benefic for speaking.'
            ],
            [
                'name' => 'Shit',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Tasks halted suddenly',
                'details' => 'Work stops before completion, causing setbacks.'
            ],
            [
                'name' => 'SL',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Brings financial security and stability.'
            ],
            [
                'name' => 'Su',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Family issues, litigation, misunderstandings',
                'details' => '"Su" in the name causes family issues, complaints, or legal problems.'
            ],
            [
                'name' => 'VC',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Wealth frequency',
                'details' => 'Attracts abundance and prosperity.'
            ],
            [
                'name' => 'Vin/Win',
                'type' => 'Benefic',
                'issues_faced_in_life' => 'Victory and success',
                'details' => 'Provides a winning attitude, helps with victory in ventures.'
            ],
            [
                'name' => 'WAR',
                'type' => 'Malefic',
                'issues_faced_in_life' => 'Regular tension, struggles, challenges',
                'details' => 'Regular tension and challenges come with names that have "WAR."'
            ]
        ];
        ModelsWordAndCombination::insert($data);
            }
    }


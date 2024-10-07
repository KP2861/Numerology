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
                'name_sound' => 'ANT',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Growth and progress',
                'meaning' => 'Your name carries a growth-focused energy. Expect expansion and progress in life.',
                'famous_names' => 'Rajnikant, Suryakant, Nishant'
            ],
            [
                'name_sound' => 'AR',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth, success, and financial stability',
                'meaning' => 'AR attracts money, wealth, and success, keeping you free from financial stress.',
                'famous_names' => 'Arvind, Arpita, ARS'
            ],
            [
                'name_sound' => 'ASH',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Brings problems',
                'meaning' => 'Watch out! ASH may attract life challenges and obstacles.',
                'famous_names' => 'Ashish, Ashwini'
            ],
            [
                'name_sound' => 'BA',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'The BA in your name brings financial prosperity and abundance.',
                'famous_names' => 'Babita, Barun, Bansari'
            ],
            [
                'name_sound' => 'CC',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'This sound enhances luck, especially in financial and business growth.',
                'famous_names' => 'Chaitanya, Charu, Chandrika'
            ],
            [
                'name_sound' => 'CG',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'CG helps you succeed in business ventures, ensuring long-term prosperity.',
                'famous_names' => 'Chagan, Chiranjeevi, Charan'
            ],
            [
                'name_sound' => 'CS',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'A stable financial future is supported by this sound vibration.',
                'famous_names' => 'Chandra, Charu, Chaitanya'
            ],
            [
                'name_sound' => 'CV',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Very good life',
                'meaning' => 'You are destined for leadership and success with this sound. Aim to be first!',
                'famous_names' => 'Charan, Chitresh, Chandan'
            ],
            [
                'name_sound' => 'DM',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'DM ensures that financial opportunities will come your way.',
                'famous_names' => 'Dhanraj, Dinesh, Deepa'
            ],
            [
                'name_sound' => 'EE',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'Symbolizing growth and prosperity, EE opens the doors to success.',
                'famous_names' => 'Eesha, Eshan, Esha'
            ],
            [
                'name_sound' => 'EL',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'EL attracts career success and financial gains. Look forward to growth!',
                'famous_names' => 'Elina, Eklavya, Elvis'
            ],
            [
                'name_sound' => 'ESH',
                'energy_type' => 'Neutral',
                'life_challenges_or_success' => '50% of problems reduced compared to "ASH"',
                'meaning' => 'ESH lessens the negative energy of ASH, reducing life challenges.',
                'famous_names' => 'Eshan, Ayesha'
            ],
            [
                'name_sound' => 'GG',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Strong financial growth',
                'meaning' => 'GG attracts wealth and helps you succeed in business and life goals.',
                'famous_names' => 'Gagan, Gaurav, Gita'
            ],
            [
                'name_sound' => 'HAN',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Brings wealth',
                'meaning' => 'The sound HAN invites financial success and prosperity into your life.',
                'famous_names' => 'Mohan, Rohan'
            ],
            [
                'name_sound' => 'Hit',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Power and success',
                'meaning' => 'You’ll experience power and achievement with this sound in your name.',
                'famous_names' => 'Rohit, Mohit'
            ],
            [
                'name_sound' => 'KS',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'KS promotes stability and prosperity, ensuring long-term financial security.',
                'famous_names' => 'Kiran, Karishma, Kunal'
            ],
            [
                'name_sound' => 'LG',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'LG attracts wealth and luck, making life smooth and prosperous.',
                'famous_names' => 'Lakshmi, Laxman, Lavanya'
            ],
            [
                'name_sound' => 'LL',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'LL in your name represents abundance and prosperity. Look forward to financial growth!',
                'famous_names' => 'Lalit, Lata, Lakshya'
            ],
            [
                'name_sound' => 'Lo',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Low thinking, negative vibrations',
                'meaning' => 'Lo could cause delays and lead to negative thinking patterns.',
                'famous_names' => 'Lokesh, Alok, Lolita'
            ],
            [
                'name_sound' => 'LS',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'LS in your name strengthens your wealth accumulation and financial stability.',
                'famous_names' => 'Lakshmi, Lata, Laxman'
            ],
            [
                'name_sound' => 'LV',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'LV brings opportunities for financial success and overall growth.',
                'famous_names' => 'Lavanya, Lavi, Laxmi'
            ],
            [
                'name_sound' => 'MA',
                'energy_type' => 'Natural',
                'life_challenges_or_success' => 'Weak vibration, nature-lover',
                'meaning' => 'MA connects you to nature, but it offers limited influence in financial matters.',
                'famous_names' => 'Mamta, Manish'
            ],
            [
                'name_sound' => 'Man',
                'energy_type' => 'Natural',
                'life_challenges_or_success' => 'Manliness for men; bravery for women',
                'meaning' => 'Men feel stronger, and women gain bravery with this sound in their name.',
                'famous_names' => 'Manish, Manpreet, Manisha'
            ],
            [
                'name_sound' => 'NIL',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Financial and manifestation problems',
                'meaning' => 'NIL could block your ability to manifest desires and create financial problems.',
                'famous_names' => 'Nilima, Nilesh'
            ],
            [
                'name_sound' => 'NO',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Attracts trouble',
                'meaning' => 'This sound brings denial and frequent challenges. Beware of obstacles!',
                'famous_names' => 'Manoj, Vinod, Norway'
            ],
            [
                'name_sound' => 'OM',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Removes negative energy',
                'meaning' => 'OM clears out negative energy and attracts peace and success.',
                'famous_names' => 'Omprakash, Om'
            ],
            [
                'name_sound' => 'ON',
                'energy_type' => 'Malefic (personal), Benefic (business)',
                'life_challenges_or_success' => 'Relationship issues in personal life but success in business',
                'meaning' => 'ON can cause personal relationship challenges but is great for business success.',
                'famous_names' => 'Amazon, Sony, Camon'
            ],
            [
                'name_sound' => 'PK',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Very good life',
                'meaning' => 'PK brings fame, prosperity, and overall good fortune.',
                'famous_names' => 'Prakash, Priya, Pankaj'
            ],
            [
                'name_sound' => 'PP',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'PP draws in financial success and abundance, supporting a prosperous life.',
                'famous_names' => 'Priya, Puneet, Poonam'
            ],
            [
                'name_sound' => 'RA',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'RA brings stability, growth, and strong financial opportunities.',
                'famous_names' => 'Rajesh, Radhika, Ramesh'
            ],
            [
                'name_sound' => 'RAM',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Near success but eventual failure',
                'meaning' => 'RAM leads you close to success but often results in failure at the last step.',
                'famous_names' => 'Ramesh, Ramya, Raman'
            ],
            [
                'name_sound' => 'RAN',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Energy drain',
                'meaning' => 'RAN drains vitality, leaving you tired and demotivated.',
                'famous_names' => 'Ranjit, Ranvir, Vikrant'
            ],
            [
                'name_sound' => 'RAT',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Opportunities',
                'meaning' => 'RAT opens up opportunities for success and personal growth.',
                'famous_names' => 'Ratan, Virat, Samrat'
            ],
            [
                'name_sound' => 'REVA',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Strong wealth and success',
                'meaning' => 'REVA brings immense financial prosperity and success, particularly in business.',
                'famous_names' => 'Revathi, Reva'
            ],
            [
                'name_sound' => 'RP',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'RP promotes prosperity and long-term wealth, ensuring abundance in life.',
                'famous_names' => 'Ravi, Riya, Rupal'
            ],
            [
                'name_sound' => 'RUSH',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Speed in tasks',
                'meaning' => 'RUSH speeds up success and helps you complete tasks quickly and efficiently.',
                'famous_names' => 'Rushi, Arudhi'
            ],
            [
                'name_sound' => 'SAD',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Sad events in life',
                'meaning' => 'SAD brings a cloud of unfortunate events and emotional struggles.',
                'famous_names' => 'Sadhana'
            ],
            [
                'name_sound' => 'SH',
                'energy_type' => 'Malefic for women, Benefic for oration',
                'life_challenges_or_success' => 'Relationship issues for women, strong in public speaking',
                'meaning' => 'Women with SH may experience relationship problems but gain strength in communication.',
                'famous_names' => 'Shalin, Shayla, Shee'
            ],
            [
                'name_sound' => 'Shit',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Tasks halted suddenly',
                'meaning' => 'Shit leads to delays, causing tasks to stop abruptly before completion.',
                'famous_names' => 'Harshit, Rakshit'
            ],
            [
                'name_sound' => 'SL',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'SL attracts financial security, stability, and long-term prosperity.',
                'famous_names' => 'Shalini, Shubham, Simran'
            ],
            [
                'name_sound' => 'Su',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Family issues, litigation, misunderstandings',
                'meaning' => '"Su" can create misunderstandings and lead to family disputes or legal troubles.',
                'famous_names' => 'Supriya, Sudhir'
            ],
            [
                'name_sound' => 'VC',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Wealth frequency',
                'meaning' => 'VC invites abundance and prosperity into both your personal and professional life.',
                'famous_names' => 'Vishal, Vaibhav, Vinod'
            ],
            [
                'name_sound' => 'Vin/Win',
                'energy_type' => 'Benefic',
                'life_challenges_or_success' => 'Victory and success',
                'meaning' => 'Vin/Win ensures a winning attitude, bringing success in ventures.',
                'famous_names' => 'Vinayak, Arvind, Godwin'
            ],
            [
                'name_sound' => 'WAR',
                'energy_type' => 'Malefic',
                'life_challenges_or_success' => 'Regular tension, struggles, challenges',
                'meaning' => 'WAR causes ongoing struggles and tensions in life, leading to frequent challenges.',
                'famous_names' => 'Anwar, Swarna, Ishwar'
            ]
        ];
        ModelsWordAndCombination::insert($data);
            }
    }


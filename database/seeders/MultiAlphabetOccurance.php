<?php

namespace Database\Seeders;

use App\Models\MultiAlphabetOccurance as ModelsMultiAlphabetOccurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultiAlphabetOccurance extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'alphabet' => 'A',
                'details' => 'Leader, Willpower, Initiator, Ego, Ambition, Honest, Original Ideas',
                'if_multiple_occurrence_issues_in_life' => 'Immunity issues, hairfall, Overconfidence',
                'remedies' => 'Aditya Hrodya Stotram on Sunday 3 times, Practice humility, Meditation, Chant Om Namah Shivaya'
            ],
            [
                'alphabet' => 'B',
                'details' => 'Cooperative, Knowledgeable, Admin Skills, Moody, Spirituality, Emotional, Initiator, Shy and Faint-Hearted',
                'if_multiple_occurrence_issues_in_life' => 'Increase in emotions, Inability to make quick decisions',
                'remedies' => 'Silver ring in left hand thumb, Chant "Eholus Hoorius" 51 times, Om Namah Shivay, Practice grounding techniques, Meditation'
            ],
            [
                'alphabet' => 'C',
                'details' => 'High Headed, Wise, Intelligent, Creative, Admin Ability, No Manual Labour',
                'if_multiple_occurrence_issues_in_life' => 'Energy waste, Arrogance, Struggles in teamwork, Isolation',
                'remedies' => 'Touch feet of mother and father, Engage in collaborative activities, Chant "Om" daily'
            ],
            [
                'alphabet' => 'D',
                'details' => 'Honest, Bold, Definite Opinion, Daring, Rebellious, Materialistic, Hard-Worker, Prestige Oriented',
                'if_multiple_occurrence_issues_in_life' => 'Stomach & respiratory issues, confidence, stress, prestige concerns',
                'remedies' => 'Meditation for clarity, Offer water to the Sun daily'
            ],
            [
                'alphabet' => 'E',
                'details' => 'Intellectual, Creative, Flexible, Disciplined, Thinks Well Before Decision, Attracts Others Easily',
                'if_multiple_occurrence_issues_in_life' => 'Afraid of public opinion, attracted to yoga & spirituality, good analysis power',
                'remedies' => 'Meditation on the third eye, Deep breathing exercises'
            ],
            [
                'alphabet' => 'F',
                'details' => 'Loyal to Friends and Family, Responsible, Health Provider, Stable in Thoughts',
                'if_multiple_occurrence_issues_in_life' => 'Responsible, harmonious, unwilling to accept mistakes',
                'remedies' => 'Heart chakra (YAM), Practice "I accept love & give love easily," Citrine gemstone, Prioritize self-care'
            ],
            [
                'alphabet' => 'G',
                'details' => 'Analytical, Observant, Attentive, Self-Confident, Flexible',
                'if_multiple_occurrence_issues_in_life' => 'If dishonest, they become lazy and indulgent',
                'remedies' => 'Connect with nature, Engage in grounding exercises'
            ],
            [
                'alphabet' => 'H',
                'details' => 'Planning, Intuition, Sense of Danger, Occult Science, Good Reputation, Multiple Sources of Income',
                'if_multiple_occurrence_issues_in_life' => 'Back pain, financial challenges',
                'remedies' => 'Donate cardamom every three months, Practice time management, Wear Moonstone'
            ],
            [
                'alphabet' => 'I',
                'details' => 'Intense, Loving, Learned, Untiring Effort, Concentration, Expressive',
                'if_multiple_occurrence_issues_in_life' => 'Emotional imbalance, Confusion in decision-making',
                'remedies' => 'Meditation, Chant Gayatri Mantra'
            ],
            [
                'alphabet' => 'J',
                'details' => 'Magnetic, Artistic, Authentic, Writing and Arts Admin, Friendly to Opposite Sex',
                'if_multiple_occurrence_issues_in_life' => 'Misunderstandings in relationships, Ego issues',
                'remedies' => 'Practice gratitude, Wear Rose Quartz'
            ],
            [
                'alphabet' => 'K',
                'details' => 'Works for Society, Helpful, Intuitive, Patient, Deep Thinker',
                'if_multiple_occurrence_issues_in_life' => 'Multiple sources of income, takes care of others’ families more than their own',
                'remedies' => 'Moon remedies, Chant Om Chadrya Namaha'
            ],
            [
                'alphabet' => 'L',
                'details' => 'Ordering, Logical, Versatile, Straightforward, Memory Expert',
                'if_multiple_occurrence_issues_in_life' => 'Losses, dependencies increase',
                'remedies' => 'Green aventurine + citrine, Donate jaggery and chana dal to Lord Vishnu on 21 Thursdays'
            ],
            [
                'alphabet' => 'M',
                'details' => 'Noble, Undefeatable, Moody, Strong in Mind and Character, Powerful Thoughts, Nice Speech',
                'if_multiple_occurrence_issues_in_life' => 'Mood swings, Difficulty in personal relationships',
                'remedies' => 'Clear quartz, Chant "Thanba" 108 times, Use abundance Zibu symbol ("I am earning 1 Cr per month, thank you universe")'
            ],
            [
                'alphabet' => 'N',
                'details' => 'Success and Money, Emotional, Sensitive, Success in All Endeavors',
                'if_multiple_occurrence_issues_in_life' => 'Heat generation in body, not good for health',
                'remedies' => 'Norostomus Padua Deh, Meditation, Sheetla Maata Jal'
            ],
            [
                'alphabet' => 'O',
                'details' => 'Mystical, Mental Power, Home Loving, Secretive, Conservative, Divine Power, Intuition',
                'if_multiple_occurrence_issues_in_life' => 'Overwhelmed by secrecy, Difficulty expressing emotions',
                'remedies' => 'Elohium Holorious, Ashweena'
            ],
            [
                'alphabet' => 'P',
                'details' => 'Not a good initiator, Clear-sighted, Strong Willpower, Powerful Speech',
                'if_multiple_occurrence_issues_in_life' => 'Strong willpower, struggles in initiating',
                'remedies' => 'Morning walk, Kapalbhati, Work on speech'
            ],
            [
                'alphabet' => 'Q',
                'details' => 'Controversies, High Position, Firm, Powerful, Hopeful, Luxury after Trials',
                'if_multiple_occurrence_issues_in_life' => 'Delays in success, Conflicts in relationships',
                'remedies' => 'Hanuman Chalisa, Chant Mahamrityunjaya Mantra'
            ],
            [
                'alphabet' => 'R',
                'details' => 'Mind Power, Knowledge, Strength, Good Deeds, Success in Politics',
                'if_multiple_occurrence_issues_in_life' => 'Ego issues, Constant need for appreciation',
                'remedies' => 'Donate white sweets to children on Monday, Chant "Om"'
            ],
            [
                'alphabet' => 'S',
                'details' => 'Fame, Dual Nature, Encouragement, Savior',
                'if_multiple_occurrence_issues_in_life' => 'Joint pain, back pain, body pains',
                'remedies' => 'Luck behala Murtza, Gayatri Mantra'
            ],
            [
                'alphabet' => 'T',
                'details' => 'Spiritual, Stubborn, Decisive, Sincere, Generous',
                'if_multiple_occurrence_issues_in_life' => 'Rigidity, Over-generosity, Stress from giving too much',
                'remedies' => 'Gayatri Mantra, Satnaja donation'
            ],
            [
                'alphabet' => 'U',
                'details' => 'Prosperity, Street Smart, Spiritual, Romantic, Versatile',
                'if_multiple_occurrence_issues_in_life' => 'Cheating, betrayal in life, Difficulty balancing material and spiritual life',
                'remedies' => 'Feed the fish, Wear color on Friday, Never disrespect women'
            ],
            [
                'alphabet' => 'V',
                'details' => 'Success, Mass Support, Energetic, Independent Thinking, Public Service',
                'if_multiple_occurrence_issues_in_life' => 'Loneliness, Difficulty in maintaining friendships',
                'remedies' => 'Citrine plus Aventurine, Engage in charity work'
            ],
            [
                'alphabet' => 'W',
                'details' => 'Success, Risk-Takers, Adventurous, Ambitious, Likes Traveling',
                'if_multiple_occurrence_issues_in_life' => 'Restlessness, Lack of commitment',
                'remedies' => 'Amethyst plus Clear Quartz, Practice mindfulness'
            ],
            [
                'alphabet' => 'X',
                'details' => 'Fast, Sudden Actions, Success Later in Life, Skeptical, Attracts Wealth',
                'if_multiple_occurrence_issues_in_life' => 'Late success in life, Lack of trust in others',
                'remedies' => 'Wear Tiger Eye, Practice positive affirmations'
            ],
            [
                'alphabet' => 'Y',
                'details' => 'Mild-Mannered, Soft-Hearted, Dependent on Others, Gentle',
                'if_multiple_occurrence_issues_in_life' => 'Dependence on others, Emotional vulnerability',
                'remedies' => 'Throat and Heart Chakra exercises, Wear Tiger Eye'
            ],
            [
                'alphabet' => 'Z',
                'details' => 'Helpful, Diplomatic, Intelligent, Respected, Avoid Nervousness, Worries, Insomnia',
                'if_multiple_occurrence_issues_in_life' => 'Nervous',
                'remedies' => 'Chant Om Namah Shivaya, Elohium Holorious, Brisk walking'
            ]
        ];
        ModelsMultiAlphabetOccurance::insert($data);
    }
}

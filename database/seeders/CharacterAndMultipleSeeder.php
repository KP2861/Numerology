<?php

namespace Database\Seeders;

use App\Models\CharacterAndMultiple;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterAndMultipleSeeder extends Seeder
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
                'personal_traits' => 'You are a natural leader, filled with willpower and ambition. You’re honest and original in your ideas.',
                'multiple_occurrences' => 'Struggling with immunity issues, hair fall, or feeling overconfident? 
        If you have many "A"s, you might face immunity issues, hair fall, or struggle with overconfidence.',
                'power_remedies' => 'Chant Aditya Hrudaya Stotram on Sundays (3 times), practice humility, meditate, and chant Om Namah Shivaya.'
            ],
            [
                'alphabet' => 'B',
                'personal_traits' => 'You’re cooperative, spiritual, and knowledgeable. Your emotional depth and wisdom help you navigate life.',
                'multiple_occurrences' => 'Too emotional or finding it hard to make quick decisions?
        Too many "B"s could make you overly emotional or slow in making decisions.',
                'power_remedies' => 'Wear a silver ring on your left-hand thumb, chant "Eholus Hoorius" 51 times, practice grounding techniques, and meditate.'
            ],
            [
                'alphabet' => 'C',
                'personal_traits' => 'Creative and wise, you possess great administrative skills. Your high-energy personality drives your original ideas.',
                'multiple_occurrences' => 'Feeling arrogant or struggling to work in teams?
        Repeated "C"s might make you feel arrogant or isolated, struggling with teamwork.',
                'power_remedies' => 'Touch the feet of your mother and father daily, engage in teamwork, and chant "Om" every day.'
            ],
            [
                'alphabet' => 'D',
                'personal_traits' => 'You’re bold, hardworking, and prestige-oriented. Your material success often stems from your courage.',
                'multiple_occurrences' => 'Stomach problems, stress, or worried about status?
        Multiple "D"s may cause stomach or respiratory issues, and stress over status.',
                'power_remedies' => 'Offer water to the Sun daily and meditate for clarity.'
            ],
            [
                'alphabet' => 'E',
                'personal_traits' => 'Your intellect shines through disciplined and flexible thinking. People are drawn to your analytical mind.',
                'multiple_occurrences' => 'Feeling nervous or caring too much about public opinion?
        Having too many "E"s might make you nervous or overly concerned with others\' opinions.',
                'power_remedies' => 'Meditate on your third eye, practice deep breathing exercises.'
            ],
            [
                'alphabet' => 'F',
                'personal_traits' => 'Loyalty and responsibility define you. You care deeply about your friends and family’s well-being.',
                'multiple_occurrences' => 'Struggling to admit mistakes or feeling overburdened?
        You may struggle to admit mistakes or feel burdened by too much responsibility if "F" repeats.',
                'power_remedies' => 'Work on your heart chakra (YAM mantra), and wear a citrine gemstone to promote self-care.'
            ],
            [
                'alphabet' => 'G',
                'personal_traits' => 'You’re analytical, observant, and confident. Your attention to detail makes you excel in complex tasks.',
                'multiple_occurrences' => 'Feeling lazy or indulgent?
        Repeating "G"s can cause laziness or indulgence.',
                'power_remedies' => 'Spend time in nature, engage in grounding exercises, and focus on balance.'
            ],
            [
                'alphabet' => 'H',
                'personal_traits' => 'Your intuition is strong, and your strategic mind helps you plan well. You’re drawn to occult knowledge.',
                'multiple_occurrences' => 'Struggling with back pain or financial issues?
        Multiple "H"s can lead to back pain or financial challenges.',
                'power_remedies' => 'Donate cardamom every 3 months, manage your time effectively, and wear a moonstone for balance.'
            ],
            [
                'alphabet' => 'I',
                'personal_traits' => 'Your emotional depth makes you loving and expressive. You approach challenges with intense concentration.',
                'multiple_occurrences' => 'Emotional confusion or imbalance affecting decisions?
        Many "I"s may lead to emotional imbalance or confusion in decision-making.',
                'power_remedies' => 'Meditate regularly and chant the Gayatri Mantra to calm your mind.'
            ],
            [
                'alphabet' => 'J',
                'personal_traits' => 'Artistic and magnetic, your authenticity draws people in. You excel in writing and creative expression.',
                'multiple_occurrences' => 'Ego getting in the way or issues in relationships?
        Ego issues or misunderstandings in relationships may arise with repeated "J"s.',
                'power_remedies' => 'Practice gratitude, wear rose quartz, and focus on connecting with others kindly.'
            ],
            [
                'alphabet' => 'K',
                'personal_traits' => 'You work tirelessly for society, and your intuitive, deep-thinking nature guides you.',
                'multiple_occurrences' => 'Too involved in helping others’ families while neglecting your own?
        You may take care of others more than yourself if "K" appears often.',
                'power_remedies' => 'Follow moon remedies, chant "Om Chadrya Namaha", and maintain boundaries.'
            ],
            [
                'alphabet' => 'L',
                'personal_traits' => 'Logic and versatility define you. Your memory and straightforwardness make you a reliable decision-maker.',
                'multiple_occurrences' => 'Feeling dependent or experiencing losses?
        Too many "L"s can lead to dependency or financial losses.',
                'power_remedies' => 'Wear green aventurine, donate jaggery and chana dal to Lord Vishnu for 21 Thursdays.'
            ],
            [
                'alphabet' => 'M',
                'personal_traits' => 'You’re noble and powerful, with strong thoughts and high energy. Your charisma helps you excel in life.',
                'multiple_occurrences' => 'Mood swings or challenges in relationships?
        Mood swings or relationship struggles may occur with repeated "M"s.',
                'power_remedies' => 'Use clear quartz, chant "Thanba" 108 times, and visualize financial abundance.'
            ],
            [
                'alphabet' => 'N',
                'personal_traits' => 'Success and money naturally flow to you. Your sensitivity and emotional nature keep you connected to others.',
                'multiple_occurrences' => 'Experiencing heat issues or feeling unhealthy?
        Heat generation in the body or health issues might appear with multiple "N"s.',
                'power_remedies' => 'Practice cooling techniques like Norostomus Padua Deh, and offer prayers to Sheetla Maata.'
            ],
            [
                'alphabet' => 'O',
                'personal_traits' => 'Mystical and intuitive, you have strong mental power and a deep connection to the home and divine energy.',
                'multiple_occurrences' => 'Overwhelmed by secrecy or finding it hard to express emotions?
        Too many "O"s can make you feel overwhelmed by secrecy or struggle to express emotions.',
                'power_remedies' => 'Chant "Elohium Holorious", and practice sharing emotions openly with trusted ones.'
            ],
            [
                'alphabet' => 'P',
                'personal_traits' => 'You are clear-sighted, with strong willpower and powerful speech. You have the ability to command attention.',
                'multiple_occurrences' => 'Struggling to start new tasks or feeling hesitant?
        Repeated "P"s can make it hard for you to initiate tasks.',
                'power_remedies' => 'Go for morning walks, practice Kapalbhati (breathing exercises), and work on improving communication.'
            ],
            [
                'alphabet' => 'Q',
                'personal_traits' => 'Your ambition and ability to rise after trials are your strengths. Luxury comes after persistence.',
                'multiple_occurrences' => 'Delays in success or constant relationship conflicts?
        Delays in success or relationship conflicts may arise with multiple "Q"s.',
                'power_remedies' => 'Chant the Hanuman Chalisa, and recite the Mahamrityunjaya Mantra for strength.'
            ],
            [
                'alphabet' => 'R',
                'personal_traits' => 'You’re knowledgeable and successful, with mind power that drives your political or social achievements.',
                'multiple_occurrences' => 'Battling ego issues or always needing appreciation?
        Repeated "R"s might make you battle ego issues or constantly seek validation.
        ',
                'power_remedies' => 'Donate white sweets to children on Mondays, and chant "Om" to remove ego and invite wisdom.'
            ],
            [
                'alphabet' => 'S',
                'personal_traits' => 'Fame and encouragement are your gifts. You inspire others with your energy and dual nature.',
                'multiple_occurrences' => 'Dealing with joint or back pain?
        Joint pain or body aches might appear with too many "S"s.',
                'power_remedies' => 'Recite the Gayatri Mantra, and perform exercises to strengthen your back.'
            ],
            [
                'alphabet' => 'T',
                'personal_traits' => 'Decisive and spiritual, you’re a generous soul, but your stubbornness can create challenges.',
                'multiple_occurrences' => 'Giving too much and feeling stressed?
        Over-generosity or stress from giving too much might arise with multiple "T"s.',
                'power_remedies' => 'Donate Satnaja (seven grains) regularly, and chant the Gayatri Mantra for balance.'
            ],
            [
                'alphabet' => 'U',
                'personal_traits' => 'You’re prosperous, street-smart, and versatile. Your romantic nature adds to your charm.',
                'multiple_occurrences' => 'Experiencing betrayal or difficulty balancing material/spiritual life?
        Repeated "U"s might cause betrayal or difficulty balancing material and spiritual life.',
                'power_remedies' => 'Feed fish on Fridays and wear bright colors to boost your energy.'
            ],
            [
                'alphabet' => 'V',
                'personal_traits' => 'You’re successful, energetic, and known for your independent thinking. People look up to you.',
                'multiple_occurrences' => 'Feeling lonely or struggling with friendships?Loneliness or trouble maintaining friendships may occur with multiple "V"s.',
                'power_remedies' => 'Wear a combination of citrine and aventurine gemstones, and volunteer in charity work to feel connected.'
            ],
            [
                'alphabet' => 'W',
                'personal_traits' => 'Adventurous and ambitious, you take risks and have a love for traveling and exploring new things.',
                'multiple_occurrences' => 'Restless or lacking commitment?
        Restlessness or commitment issues might arise with repeated "W"s.',
                'power_remedies' => 'Wear amethyst and clear quartz, and practice mindfulness for grounding.'
            ],
            [
                'alphabet' => 'X',
                'personal_traits' => 'Fast-moving and success-oriented, you attract wealth later in life.',
                'multiple_occurrences' => 'Experiencing delays in success or trust issues?
        Delays in success or trust issues might occur with multiple "X"s.',
                'power_remedies' => 'Wear Tiger Eye, and repeat positive affirmations to build trust in others.'
            ],
            [
                'alphabet' => 'Y',
                'personal_traits' => 'You’re gentle and soft-hearted, with a tendency to rely on others emotionally.',
                'multiple_occurrences' => 'Feeling emotionally vulnerable or relying too much on others?
        Over-dependency or emotional vulnerability may arise with repeated "Y"s.',
                'power_remedies' => 'Focus on throat and heart chakra exercises, and wear Tiger Eye for strength.'
            ],
            [
                'alphabet' => 'Z',
                'personal_traits' => 'Diplomatic and intelligent, you are respected by others for your helpful and thoughtful nature.',
                'multiple_occurrences' => 'Dealing with nervousness or insomnia?
        Nervousness or insomnia might affect you with too many "Z"s.',
                'power_remedies' => 'Chant "Om Namah Shivaya" regularly, and engage in brisk walking for mental clarity.'
            ]
        ];
        CharacterAndMultiple::insert($data);
    }
}

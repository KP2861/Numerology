<?php

namespace Database\Seeders;

use App\Models\MobileNumberTotal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobileNumberCompoundDetail extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'number' => '1',
                'detail' => 'You have a compassionate heart and an adventurous nature. Significant events in your life may occur early, like beginning work or getting married at a young age. Your strong communication skills and confidence make you a natural leader. A government or semi-government job is highly likely for you, or someone in your family may be preparing for one. You are versatile and adaptable, which could also lead you to success in the travel and tourism business. You enjoy exploring new places and learning from experiences. Your optimism and ability to inspire others help you thrive in environments that require social interaction. You’re always drawn to leadership roles and possess the energy to handle challenges with ease.'
            ],
            [
                'number' => '2',
                'detail' => 'Sensitive and emotional, you have a deep connection to the arts and literature. You are likely to excel in creative fields, where your imagination and sensitivity allow you to express yourself beautifully. However, your emotional nature can make you prone to stress, leading to mood swings or even depression. You may face interruptions in your educational journey and could experience health issues related to joints, water retention, or urinary problems. It’s crucial for you to avoid negative people or environments, as you absorb energy easily. There may also be issues with dampness or leakage in your home or workplace, so maintaining a dry and peaceful environment is essential. Your empathetic nature makes you highly caring but vulnerable to emotional overload.'
            ],
            [
                'number' => '3',
                'deatil' => 'You are highly intellectual and driven toward achieving higher education. Your thirst for knowledge allows you to excel in academic or professional fields, and you have the potential to become a doctor or enter into occult sciences. With your wisdom, you are often sought out for advice and guidance, making you a highly respected figure in your community. You are someone who values learning and is constantly looking for ways to grow intellectually. Your disciplined approach to life and education often leads you to positions of authority, where you are admired for your insight and understanding. You might also have a deep interest in spiritual or philosophical topics, adding depth to your conversations and relationships.'
            ],
            [
                'number' => '4',
                'detail' => 'Your sharp intelligence and communication skills stand out, making you suitable for careers in law enforcement, healthcare, or legal professions. You are a practical thinker who excels in structured environments where rules and order are important. You have a natural ability to solve problems quickly and efficiently, making you an asset in high-pressure situations like the police force or hospital settings. People often come to you for advice, as your logical mind and clear communication make it easy for others to understand complex ideas. While you prefer to work within established systems, you’re also innovative and can improve processes in your workplace. Your strong sense of justice and ethics ensures that you work with integrity and purpose.'
            ],
            [
                'number' => '5',
                'detail' => 'Highly intelligent and action-oriented, you are a natural fit for the business world. Your sharp mind allows you to see opportunities where others may not, and you thrive in fast-paced environments. However, with the number 5 appearing multiple times in your chart, there could be a tendency toward manipulation, whether from you or others. Be cautious in business partnerships, as issues of trust may arise. Despite this, your charm and quick thinking make you a strong negotiator and someone who easily adapts to new challenges. You are a born leader, able to motivate others and take decisive action. Travel, communication, and entrepreneurship are key areas where you will find success, as they align with your restless and energetic personality.'
            ],
            [
                'number' => '6',
                'detail' => 'With a strong command of language and an affinity for learning, you excel in professions that require communication and knowledge, such as acting, teaching, or writing. You are likely to have a steady cash flow throughout your life, as financial stability often comes easily to you. Marriage will be a major turning point in your life, bringing significant positive change. You have a natural ability to balance your personal and professional lives, and your home will often be a place of peace and harmony. Your love for beauty, art, and culture makes you appreciate the finer things in life. You are often the go-to person in your social circle for advice or guidance, as your calm demeanor reassures others.'
            ],
            [
                'number' => '7',
                'detail' => 'Romantic and deeply introspective, you are someone who is drawn to love and relationships, with a high chance of experiencing a love marriage. If the number 7 appears multiple times in your chart, there may also be a temptation toward extra-marital relationships. You are deeply attracted to the opposite sex and often find comfort in companionship. Your love for art, music, and creativity is a defining trait, and you are always in search of deeper meaning in life. However, your desire for love can sometimes lead you into complicated situations, so it’s important to stay grounded. You may also be highly intuitive, often relying on your gut feelings to guide you through difficult situations.'
            ],
            [
                'number' => '8',
                'detail' => 'Determined and hardworking, you have a strong drive to succeed, but your progress may often face delays or obstacles. You tend to worry excessively, which can lead to stress, negative thinking, and even health issues or addictions. It’s important for you to stay focused on positive goals to avoid falling into a cycle of anxiety and pessimism. Your life may be marked by sudden and unexpected events, both good and bad, which can throw you off balance. However, your determination helps you push through challenges. You are often seen as a dependable person, but your tendency to take on too much stress can lead to burnout. Balance and mindfulness will help you achieve long-term success.'
            ],
            [
                'number' => '9',
                'detail' => 'Confident and independent, you have a strong desire for freedom and dislike being controlled by others. You are highly sociable and enjoy being in the company of others, but you also have a short temper and can become frustrated when things don’t go your way. You thrive in environments where you can work independently, making fields like engineering or entrepreneurship ideal for you. Your leadership qualities are strong, but you need to work on managing your emotions to avoid conflicts. You are highly ambitious and always strive to achieve your goals, but it’s important to remember the value of teamwork and collaboration. Despite your desire for independence, finding a balance between autonomy and cooperation will lead to success.'
            ]

        ];

        MobileNumberTotal::insert($data);
    }
}

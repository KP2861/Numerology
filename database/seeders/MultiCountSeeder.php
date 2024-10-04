<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MultiCount;

class MultiCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [ 
            [
                'digit' => '0',
                'type' => 'Malefic',
                'message' => 'Arash se farsh tak (Ups and Downs: Life with this digit can be like a rollercoaster, with major highs and lows.
        Unpredictable: Expect some instability and surprises along the way.
        Status Fluctuations: You might see changes in your position or stability.
        Challenges Ahead: Be ready for obstacles and unexpected turns.
        Turbulent Times: This digit brings a lot of change and uncertainty.'
            ],
            [
                'digit' => '1',
                'type' => 'Neutral',
                'message' => 'Confident Leader: You’re likely to shine with strong self-esteem and leadership skills.
        Charismatic: Your attractive attitude draws people in.
        Independent: Emphasizes individuality and confidence.
        Assertive: Sometimes, confidence can come off as egotism.
        Balancing Act: Finding the right balance between confidence and humility can be a challenge.'
            ],
            [
                'digit' => '2',
                'type' => 'Malefic',
                'message' => 'Emotional Waves: This digit can lead to mood swings and emotional ups and downs.
        Health Alerts: Watch out for stress-related issues, like blood pressure changes.
        Intuitive Feelings: You might have strong intuition, but it can come with internal conflict.
        Stress and Anxiety: Emotional highs and lows can impact your well-being.
        Health Impact: Managing stress is key to staying healthy.'
            ],
            [
                'digit' => '3',
                'type' => 'Neutral',
                'message' => 'Curious Learner: You’re naturally curious and eager to explore new things.
        Trusting Nature: You easily trust others, which can be both a strength and a vulnerability.
        Great Storyteller: Enjoy sharing stories and experiences with others.
        Effective Communicator: Your ability to communicate well helps you connect with people.
        Vulnerable to Exploitation: Be mindful of your trusting nature to avoid being taken advantage of.'
            ],
            [
                'digit' => '4',
                'type' => 'Malefic',
                'message' => 'Digestive Issues: This digit can bring challenges like gastric problems.
        Delays and Disruptions: You might face obstacles and frequent changes.
        Changing Plans: Life can be unpredictable with constant adjustments needed.
        Stability Challenges: Overcoming obstacles can be tough, leading to a sense of instability.
        Persistent Hurdles: Be prepared for frequent changes and delays.'
            ],
            [
                'digit' => '5',
                'type' => 'Benific',
                'message' => 'Business Boost: This digit is great for business success and financial growth.
        Clever and Adaptable: You’re resourceful and quick to adapt to new situations.
        Successful Decisions: Your knack for making profitable choices shines.
        Thriving in Business: Excellent for excelling in the business world.
        Resourceful Approach: Your cleverness helps you achieve success and growth.'
            ],
            [
                'digit' => '6',
                'type' => 'Benific',
                'message' => 'Luxurious Life: You enjoy the finer things, like luxury and travel.
        Charming Personality: Your charm and attractive personality draw people in.
        Comfort Seeker: While you enjoy comfort, you might also find yourself frequently complaining.
        Fashion Forward: A love for fashion and style is evident.
        Critical Perspective: Enjoys comfort but may focus on what could be better.'
            ],
            [
                'digit' => '7',
                'type' => 'Malefic',
                'message' => 'Relationship Struggles: You may face challenges in personal relationships.
        Overthinker: Tendency to overanalyze and stress about details.
        Mystical Interests: Strong interest in spiritual and mystical topics.
        Health and Stress: Be mindful of mental stress and its impact on your health.
        Introspective Nature: Prefers deep thinking and personal reflection.'
            ],
            [
                'digit' => '8',
                'type' => 'Neutral',
                'message' => 'Family First: You carry significant responsibilities within your family.
        Dedicated: A strong sense of duty and commitment to loved ones.
        Supportive Role: Seen as a key support figure in family matters.
        Responsible: Reliable in managing family obligations.
        Duty Bound: Your sense of duty drives you to care for and support your family.'
            ],
            [
                'digit' => '9',
                'type' => 'Neutral',
                'message' => 'Strong and Resilient: You have the strength to handle tough situations.
        Endurance: Capable of pushing through challenges with determination.
        Rough and Tough: Well-suited for handling a demanding lifestyle.
        Health Watch: Be aware of potential blood pressure issues.
        Persistent Spirit: Your resilience helps you face and overcome obstacles.'
            ]
        ];
        MultiCount::insert($data);
    }
}

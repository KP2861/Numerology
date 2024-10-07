<?php

namespace Database\Seeders;

use App\Models\MissingNumberAndRemedies as ModelsMissingNumberAndRemedies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Resources\MissingValue;

class MissingNumberAndRemedies extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'your_unique_traits' => 'Communcation',
                'challanges_you_might_face' => 'Fear of Confrontation: Individuals lacking this number may shy away from facing challenges head-on. They might avoid taking risks or engaging in situations that require assertiveness.
        Lack of Leadership Qualities: They may struggle with taking charge or leading others, often preferring to stay in the background rather than step into leadership roles.
        Struggle to Utilize Talents: Even when they possess skills and talents, they may find it difficult to apply them effectively. This struggle can lead to frustration and a feeling of unfulfilled potential.
        Limited Support: These individuals might feel that they don’t receive the necessary support from others, which can make them feel isolated or unsupported in their endeavors.',
                'empowering_remedies_for_you' => 'Offer water to the sun daily or absorb its energy for 5-10 minutes.
        Keep a Surya Yantra in Gold & Copper.
        Apply a red tilak on the forehead.
        Place a copper sun in the North East.
        Place a red Swastik in the East.
        Perform Shiv Pooja.
        Wear a Lapis Lazuli Bracele'
            ],
            [
                'your_unique_traits' => 'SENSITIVE AND INTUITIVE',
                'challanges_you_might_face' => 'Low Confidence: They may suffer from self-doubt and lack of self-assurance, impacting their ability to take initiative or make decisions.
        Impatience: These individuals may have difficulty dealing with delays or setbacks, leading to frustration and hasty decisions.
        Blaming Others: They might have a tendency to attribute their problems or failures to external factors or other people rather than taking responsibility.
        Difficulty Building Relationships: They may struggle with forming and maintaining healthy relationships due to their emotional sensitivity and high expectations.',
                'empowering_remedies_for_you' => 'Stop expecting from others.
        Think before speaking.
        Wear a Moon Yantra in Silver or a white pearl in silver.
        Place a picture of Dual Mountains in the South West.
        Keep a white cloth in the North West.
        Obtain a silver moon or coin from your mother and place it in the North East of your home.
        Offer milk to the Moon for 40 days.
        Wear a Rudraksha Crystal Bracelet.'
            ],
            [
                'your_unique_traits' => 'PLANNING AND IMAGINATION',
                'challanges_you_might_face' => 'Lack of Guru’s Blessings: They may not feel the guidance or support from mentors or spiritual guides, which can hinder their personal and professional growth.
        Struggles Despite Efforts: Despite putting in significant effort, they may find it challenging to achieve their goals, often facing obstacles that seem disproportionate to their efforts.
        Self-Centeredness: They may become focused on their own needs and desires to the exclusion of others, impacting their relationships and ability to collaborate.
        Difficulty in Expression: Expressing themselves clearly and effectively might be a challenge, leading to misunderstandings or frustration in communication.',
                'empowering_remedies_for_you' => 'Keep a Jupiter Yantra in Gold.
        Place a Gautam Buddha picture in the North East.
        Plant a banana tree in the North East.
        Visit a temple daily.
        Apply saffron tilak on the forehead.
        Chant the Gayatri Mantra.
        Wear a Rudraksha Crystal Bracelet.'
            ],
            [
                'your_unique_traits' => 'DISCIPLINE AND ORGANISED',
                'challanges_you_might_face' => 'Avoidance of Physical Work: They may prefer to delegate tasks rather than engage in physical labor themselves, which can lead to uncompleted tasks or projects.
        Need for Motivation: They may require external motivation to stay focused and disciplined, struggling with self-motivation.
        Unorganization: A lack of organization can lead to chaos and inefficiency in their personal and professional life, making it difficult to achieve goals.
        Shortcut Tendencies: They might opt for shortcuts instead of following a structured approach, which can result in missed opportunities or incomplete tasks.',
                'empowering_remedies_for_you' => 'Keep a Rahu Yantra in red.
        Place a picture of Saraswati Maa in the North East or South West.
        Balance the South West direction of your home.
        Chant the Gayatri Mantra.
        Feed street dogs.
        Wear a Rudraksha Crystal Bracelet.'
            ],
            [
                'your_unique_traits' => 'EMOTIONAL AND MENTAL BALANCE',
                'challanges_you_might_face' => 'Confusion: They may experience frequent mental and emotional confusion, making it challenging to make clear decisions or maintain stability.
        Frequent Changes: Their life may be characterized by constant changes and upheavals, creating a sense of instability and unpredictability.
        Fear of New Things: A reluctance to embrace new experiences or changes can limit their growth and opportunities.
        Insecure Sex Life: They may experience insecurities or difficulties in their intimate relationships, impacting their overall emotional well-being.',
                'empowering_remedies_for_you' => 'Maintain a positive attitude.
        Wear a Mercury Yantra in Gold.
        Place a picture of Vishnu Bhagwan in the West.
        Feed cows.
        Wear green clothes.
        Offer green dal to birds.
        Keep a money plant in the North.
        Wear a Green Aventurine Bracelet or Rudraksha Crystal Bracelet.'
            ],
            [
                'your_unique_traits' => 'HOME AND FAMILY',
                'challanges_you_might_face' => 'Poor Family Relations: They might have strained relationships with family members, which can affect their overall sense of well-being and support network.
        Disinterest in Home Life: They may lack enthusiasm for household responsibilities or family celebrations, leading to a disconnected family life.
        Reluctance to Engage with Society: A disinterest in participating in social or family activities can create a sense of isolation and hinder their integration into the community.
        Lack of Support for Family Members: They might not actively support or engage with family members, which can impact familial bonds and relationships.',
                'empowering_remedies_for_you' => 'Wear a watch on a gold chain.
        Keep a Venus Yantra in gold.
        Place a picture of Lakshmi Mata in the South East.
        Use fragrances.
        Men should respect women.
        Women should wear Rose Quartz for relationship harmony.
        Wear a Seven Chakras bracelet for health.
        Fast on Fridays.
        Men can wear a Cat’s Eye Bracelet.'
            ],
            [
                'your_unique_traits' => 'DISAPPOINTMENTS',
                'challanges_you_might_face' => 'Spiritual Dissatisfaction: They may feel unfulfilled in their spiritual journey or lack a deeper connection to spiritual practices and beliefs.
        Impatience: Quick reactions and a lack of patience can lead to frequent setbacks and difficulties in handling challenging situations.
        Lack of Empathy: They may find it hard to empathize with others\' struggles or misfortunes, leading to a more self-centered perspective.
        Focus on Negativity: A tendency to view life through a pessimistic lens can result in a persistent sense of dissatisfaction and sorrow.',
                'empowering_remedies_for_you' => 'Cultivate a positive outlook.
        Wear a Ketu Yantra in silver.
        Place a Swastik at the main door.
        Donate food to 3 street dogs.
        Fast on Thursdays.
        Place a picture of Gautam Buddha in the North East.
        Worship Lord Ganesha.
        Wear a Tiger Eye Bracelet.'
            ],
            [
                'your_unique_traits' => 'DISCIPLINE AND ORGANISED',
                'challanges_you_might_face' => 'Avoidance of Physical Work: Similar to Number 4, they may prefer to avoid physical tasks and responsibilities, which can lead to inefficiency and missed opportunities.
        Need for Motivation: They might require external encouragement to stay focused and organized, struggling with self-discipline.
        Disorganization: A lack of organizational skills can create chaos and hinder their ability to achieve their goals effectively.
        Shortcut Tendencies: Their inclination towards shortcuts can result in incomplete or suboptimal outcomes, affecting their overall success.',
                'empowering_remedies_for_you' => 'Visit a temple daily.
        Keep Gangajal in the West.
        Place a brass pot of coins in the West.
        Learn from past mistakes and use experiences effectively.
        Wear a Rudraksha Bracelet.'
            ],
            [
                'your_unique_traits' => 'HUMANITARIAN',
                'challanges_you_might_face' => 'Detachment from Others: They may be emotionally distant and less concerned with others’ problems, impacting their ability to form meaningful connections.
        Desire for Isolation: A preference for solitude and avoidance of social involvement can limit their engagement with the community.
        Discomfort with Others’ Struggles: They might struggle with witnessing others\' difficulties or emotional pain, leading to a more detached and self-focused attitude.
        Struggling Life: They may face challenges in administration and personal affairs, resulting in a generally difficult life experience.',
                'empowering_remedies_for_you' => 'Place a red bulb in the South or South East.
        Donate red-colored masoor dal.
        Keep a Mars Yantra in Copper.
        Wear a Red Carnelian Bracelet.'
            ]
        ];
        ModelsMissingNumberAndRemedies::insert($data);
    }
}

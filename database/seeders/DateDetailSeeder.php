<?php

namespace Database\Seeders;

use App\Models\DateDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DateDetailSeeder extends Seeder
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
                'specific_detail' => 'Confident Leader: They exude strong self-belief and ambition.
Friendly & Ambitious: Charismatic and goal-oriented in all they do.
Natural Leader: Excellent leadership qualities make them stand out.
Friendly Nature: They easily make friends and connect with others.
Inspiring Presence: Their confidence and drive inspire those around them.',
                'detail' => 'They are extremely confident and ambitious. They are very friendly and very ambitious. They are having good leadership qualities.'
            ],
            [
                'number' => '2',
                'specific_detail' => 'Helpful Friend: They easily make friends and offer support.
Caring & Optimistic: Loving in relationships, handling situations with calm and confidence.
Polite & Positive: Their optimism and polite demeanor make them approachable.
Calm in Challenges: They handle challenges with grace and composure.
Friendly Personality: Their caring nature makes them beloved by those around them.',
                'detail' => 'They are very helpful persons and can make friends easily.  They tend to be loving and caring in relationships.  They are very optimistic and confident about the things they can do. They handle every situation calmly and are very polite. '
            ],
            [
                'number' => '3',
                'specific_detail' => 'Creative Talent: Thrives in arts, writing, or acting with high intelligence and creativity.
Explorative Spirit: Loves exploring new places and learning.
Engaging Company: Their presence brings joy to their loved ones.
Intelligent & Curious: Possesses a sharp mind and a passion for discovery.
Artistic Flair: Creativity shines in their professional and personal life.',
                'detail' => 'They can do very well in the field of arts, writing, speaking or even acting. They possess a high-level intelligence and have a creative mind. They love to explore new places and learn about new things. Their loved ones are very happy in their company. '
            ],
            [
                'number' => '4',
                'specific_detail' => 'Life Lover: Enthusiastic about life with a motivational spirit.
Romantic & Devoted: Has a deep romantic side and strong family loyalty.
Family-Oriented: Focuses on family but is cautious with outsiders.
Inspirational Leader: Inspires others through difficult times.
Fashionable: Keeps up with the latest trends and styles.',
                'detail' => 'They are someone who loves life.  Their motivational spirit is undeniable. They are romantic at heart and will have a very good love life.  These people are devoted to their families but do not mix up with outsiders easily. '
            ],
            [
                'number' => '5',
                'specific_detail' => 'Travel Enthusiast: Loves to explore new places.
Business Savvy: Intelligent with strong business acumen, but should avoid overconfidence.
Health-Conscious: Best to stay away from alcohol and non-veg.
Humorous Nature: Known for a great sense of humor.
Adventurous Spirit: Enjoys new experiences and challenges.',
                'detail' => 'These people love to travel.  They should stay away from alcohol or non-veg.  Since they are very intelligent and have a very good business knowledge, they should be careful of not becoming over-confident. They have a very good sense of humour.  '
            ],
            [
                'number' => '6',
                'specific_detail' => 'Luxury Lover: Enjoys comfort, luxury, and nature.
Cheerful & Compassionate: Warm-hearted and caring towards loved ones.
Enthusiastic Explorer: Eager to try new things and experiences.
Kind-Hearted: Shows genuine care and compassion.
Nature Lover: Finds joy in nature and luxurious living.',
                'detail' => 'Lovers of luxury, nature-loving. They are cheerful at heart. They are compassionate and caring about the people they love. And are enthusiastic about trying new things. '
            ],
            [
                'number' => '7',
                'specific_detail' => 'Shy Yet Likable: Reserved but endearing personality.
Dependable: Reliable and sincere in their work.
Peace-Seeking: Values stability and tranquility.
Romantic in Love: Expresses deep romance and enjoys a luxurious lifestyle.
Sincere Worker: Dedicated and sincere in their professional life.',
                'detail' => 'They have a shy but likable personality.  They are a dependable person.  They like stability and peace in their life and are sincere in their work.  When in love, they become very romantic and like to lead a luxurious life. '
            ],
            [
                'number' => '8',
                'specific_detail' => 'Financially Savvy: Can achieve financial gains with proper asset management.
Leadership Skills: Strong organizational and leadership qualities.
Ethical Use of Power: Must avoid using power selfishly to prevent problems.
Organizational Skills: Excellent at managing and leading projects.
Responsible Leader: Balances responsibility with effective leadership.',
                'detail' => 'Gains will be incurred if they manage their assets properly.  They have good leadership qualities and good organisational skills.  But if they use power for selfish purposes, they can face serious problems. '
            ],
            [
                'number' => '9',
                'specific_detail' => 'Ambitious & Aggressive: Driven to succeed with a strong, determined personality.
Extraordinary Abilities: Capable of achieving remarkable feats.
Successful Performer: Consistently successful in their endeavors.
Resilient Character: Demonstrates strength and resilience.
Goal-Oriented: Focused on achieving high goals and aspirations.',
                'detail' => 'These people are very aggressive and ambitious.  They have the ability to do well and can perform extraordinary tasks.  They will always be successful whatever they will perform. '
            ],
            [
                'number' => '10',
                'specific_detail' => 'Natural Leader: Born to lead and achieve success.
Excellent Manager: Skilled in managerial tasks and team leadership.
Soft-Hearted: Despite being a leader, they have a compassionate side.
Cautious Trust: Should guard against being taken advantage of due to their helpful nature.
Success-Driven: Committed to achieving their life goals.',
                'detail' => 'They are born leaders. Their main agenda is to achieve success in life. They have excellent managerial skills. They are very soft hearted. They should be careful as people don’t take advantage of their helpful nature.'
            ],
            [
                'number' => '11',
                'specific_detail' => 'Blessed Personality: Warm, inviting, and blessed with a friendly nature.
Passionate in Relationships: Dominates relationships with passion and care.
Good Friend: Makes and keeps good friendships easily.
God-Fearing: Holds strong spiritual beliefs and values.
Dominant Yet Caring: Balances assertiveness with affection in relationships.',
                'detail' => 'They are God-fearing and blessed people.  They have a warm and inviting personality. They seek to dominate their partner but in a non-threatening way but are very passionate in relationships. They make good friends. '
            ],
            [
                'number' => '12',
                'specific_detail' => 'Genius Mind: Known for exceptional intellect and wisdom.
Humble & Dedicated: Approaches work and life with humility and dedication.
Realistic Achiever: Balances ambition with realistic goals.
Hardworking: Focused on achieving success through hard work.
Sincere Effort: Dedicated to personal and professional growth.',
                'detail' => 'They are born geniuses as they know how to get the work done.  They are wise person known for their humility.  They are dedicated and sincere in their studies, work.  They are realistic in the game of life. '
            ],
            [
                'number' => '13',
                'specific_detail' => 'Honest & Hardworking: Faces challenges with honesty and dedication.
Resilient: Overcomes sudden changes and hurdles.
Success through Effort: Achieves success through persistent hard work.
Straightforward: Known for their direct and sincere approach.
Adaptable: Handles unexpected life changes effectively.',
                'detail' => 'This is considered as unlucky number for many.  Sudden changes can happen in their life.  But they are honest, straight-forward and hardworking which brings them success.  '
            ],
            [
                'number' => '14',
                'specific_detail' => 'Moody Yet Leader: Has a strong leadership quality despite being moody.
Health Conscious: Takes good care of their health.
Fashion Forward: Enjoys keeping up with current fashion trends.
Calm in Crisis: Remains composed in difficult situations.
Inspiring Figure: Inspires others through their leadership and calm demeanor.',
                'detail' => 'these people are very moody but take good care of their health. They are born leaders.  They keep themselves cool in difficult situations and inspire others in times of difficulty. They like to dress in sync with the latest fashion trends. '
            ],
            [
                'number' => '15',
                'specific_detail' => 'Magnetic Personality: Stands out with a captivating and cheerful demeanor.
Family-Oriented: Loves to spread joy among family and friends.
Goal-Focused: Has clear goals and a stable, happy married life.
Generous Spirit: Generously shares love and positivity.
Achiever: Stable and successful in personal and professional life.',
                'detail' => 'They have a very magnetic personality and always stand out in a crowd. They are usually smiling and love to spread love among family and friends. They have certain goals in life which they want to reach. They have a stable and happy married life. '
            ],
            [
                'number' => '16',
                'specific_detail' => 'Mentally Strong: Balances logic and intuition effectively.
Meditative Nature: Enjoys meditation and spiritual pursuits.
Respectful Leader: Leads a respected and honorable life.
Love Interest: Shows a keen interest in love matters.
Intuitive Insight: Possesses strong intuitive abilities.',
                'detail' => 'They are mentally very strong. These people are confused between logic and intuition because both of them are strong.  These people like to meditate.  Love matters are of interest to them.  These people lead a respectable life. '
            ],
            [
                'number' => '17',
                'specific_detail' => 'Creative & Shy: Shy but possesses a creative and artistic flair.
Friendly Nature: Engages well with others and enjoys artistic ventures.
Romantic Tendencies: Becomes very romantic in relationships.
Flirtatious Charm: Has a natural charm and flirtatious nature.
Artistic Inclinations: Drawn to artistic and creative pursuits.',
                'detail' => 'They are not very loud but at times lose their temper very easily.  They have a creative bent in them.  They like to indulge in artistic ventures.  They are very friendly and are born to flirt with the opposite sex. '
            ],
            [
                'number' => '18',
                'specific_detail' => 'Intelligent Leader: Highly capable of leading and managing large organizations.
Public Relations Pro: Excels in public dealings with clear focus.
Focused Vision: Clear and goal-oriented in their career.
Knowledgeable: Possesses deep understanding and expertise.
Effective Leader: Adept at leading and managing effectively.',
                'detail' => 'They are very intelligent and can lead big organisations. They can do well in public dealing activities as they have a good understanding and knowledge.  These people are clear and focussed towards life. '
            ],
            [
                'number' => '19',
                'specific_detail' => 'Versatile & Resourceful: Adaptable and skilled in various areas.
Attractive Personality: Stands out with an appealing presence.
Successful Life: Achieves success through adaptability and resourcefulness.
Adjustable: Learns to adjust for a successful life.
Stylish & Well-Dressed: Has a keen sense of style and dressing.',
                'detail' => 'The numbers is having the support of 1 & 9. They are resourceful and versatile. They need to learn to make adjustments for a successful life. They are attractive and having good sense of dressing.'
            ],
            [
                'number' => '20',
                'specific_detail' => 'Spiritual Leader: Rises to leadership through spiritual growth.
Friendly & Innocent: Liked by many for their friendly and innocent nature.
Well-Liked: Enjoys positive social interactions and relationships.
Gentle Spirit: Shows kindness and friendliness to others.
Spiritual Growth: Uses spirituality to guide their leadership path.',
                'detail' => 'They have a spiritual bent of mind.  And with the help of spirituality, they can rise and become a leader.  They are liked by all.  They are innocent and very friendly.  '
            ],
            [
                'number' => '21',
                'specific_detail' => 'Dreamy Achiever: Achieves big goals with focus and direction.
Excellent Communicator: Possesses strong communication skills, ideal for journalism.
Ambitious Dreams: Balances dreams with practical achievements.
Focused Vision: Drives towards success with clear goals.
Journalistic Flair: Skilled in conveying information and stories.',
                'detail' => 'They are dreamy but with a proper focus and direction, they can be big achievers.  They have excellent communication skills & can make good journalists. '
            ],
            [
                'number' => '22',
                'specific_detail' => 'Intuitive & Cautious: Relies on strong intuition but should avoid unethical practices.
Public Business Savvy: Excels in businesses involving public interactions.
Rational Thinker: Uses intuition with a practical approach.
Ethical Considerations: Be wary of temptation towards unethical means.
Business Acumen: Skilled in managing public-facing business ventures.',
                'detail' => 'they are intuitive and rely on their intuitions only.  They wish to make money by unethical means like gambling. But can do well in businesses where the public is involved. '
            ],
            [
                'number' => '23',
                'specific_detail' => 'Happy-Go-Lucky: Brings joy and positivity to family and friends.
Thoughtful Partner: Cares deeply for loved ones in relationships.
Independent Thinker: Values freedom and independence in thought.
Family Focused: Cherishes family connections and relationships.
Joyful Presence: Maintains a cheerful and optimistic outlook.',
                'detail' => 'They are a happy-go-lucky person.  Family & friends are very important to them. They are very thoughtful and care for their sweetheart when in a relationship. They are independent in terms of thought so prefer freedom rather bounded by people. '
            ],
            [
                'number' => '24',
                'specific_detail' => 'Financially Successful: Achieves financial success and manages responsibilities well.
Devoted to Family: Strong family values and devotion.
Creative Talent: Excels in fields like theatre or music.
Rich Taste: Enjoys a taste for the finer things in life.
Responsible Achiever: Balances financial success with family responsibilities.',
                'detail' => 'They are financially most successful, responsible and devoted to the family. They can do well in the field of theatre or music.  They have rich tastes'
            ],
            [
                'number' => '25',
                'specific_detail' => 'Friendly & Diplomatic: Approaches others with a friendly and diplomatic nature.
Generous Spirit: Shows generosity towards the underprivileged.
Ambitious Goals: Driven to achieve significant life goals.
Lovable Personality: Charms others with a warm and approachable demeanor.
Life Achiever: Focused on achieving various aspirations.',
                'detail' => 'They are a friendly and lovable person.  They try not to antagonize others by being diplomatic.  They are very generous towards the under privileged.  They are ambitious and wish to achieve lots of things in life. '
            ],
            [
                'number' => '26',
                'specific_detail' => 'Challenged but Strong: Faces many life challenges but remains resilient.
Wealth Attainment: Achieves wealth later in life.
Independent: Prefers solitude and self-reliance.
Resilient Character: Overcomes obstacles with perseverance.
Wealth Management: Gains financial success through persistent effort.',
                'detail' => 'These people face many troubles in life.  They have lot of enemies. They attain wealth at very later stages in life.  They prefer being alone. '
            ],
            [
                'number' => '27',
                'specific_detail' => 'Deep Thinker: Highly psychic and analytical with a focus on occult subjects.
Peaceful Nature: Maintains a calm and peaceful demeanor.
Intuitive Insight: Uses deep thinking and intuition in their life approach.
Reflective: Engages in thorough analysis and spiritual pursuits.
Calm Presence: Enjoys tranquility and introspection.',
                'detail' => 'They are highly psychic and deep thinkers.  They will analyze everything very minutely.  They get attracted to subjects like occult.  They are very peaceful'
            ],
            [
                'number' => '28',
                'specific_detail' => 'Rational & Pleasing: Balances rational thought with a pleasing personality.
Intuitive Insight: Relies on intuition for decision-making.
Public-Friendly: Performs well in public-facing roles.
Adaptable Nature: Adjusts well to various situations.
Pleasant Demeanor: Engages others with a friendly and rational approach.',
                'detail' => 'These people give importance to other’s point of view as well but have a rational mind. Due to the presence of 2, Moon, they will have a pleasing personality.'
            ],
            [
                'number' => '29',
                'specific_detail' => 'Optimistic Motivator: Inspires others with a positive outlook.
Cautious Approach: Takes a careful approach before trying new things.
Self-Image: Sometimes appears selfish but strives to be an excellent member of society.
Motivational Presence: Encourages and uplifts those around them.
Prudent Planner: Carefully evaluates opportunities before taking risks.',
                'detail' => 'They are optimistic and like to motivate others.  They don’t take risks and adopt of cautious approach before trying anything new.  Though selfish, they will act to be one of the best elements of society. '
            ],
            [
                'number' => '30',
                'specific_detail' => 'Social & Friendly: Enjoys being around famous and friendly people.
Leadership Skills: Demonstrates strong leadership abilities.
Dynamic Partner: Prefers a partner who is attractive, dynamic, and humorous.
Amiable Personality: Engages well with others in social settings.
Charismatic Leader: Shines in leadership and social roles.',
                'detail' => 'They love to be around people, who are friendly and famous.  They are very social and amiable.  They show good leadership skills and want their partner to be good looking, dynamic and humorous. '
            ],
            [
                'number' => '31',
                'specific_detail' => 'Simple & Honest: Values simplicity and honesty, with a creative flair.
Warm & Compassionate: Known for a warm, compassionate personality.
Dedicated Worker: Achieves goals through hard work and dedication.
Marital Disappointments: May face challenges in married life despite personal successes.
Creative Achiever: Balances creativity with a straightforward approach.',
                'detail' => 'They are simple and honest people.  They don’t like too many frills but is having a creative mind. They have a warm and compassionate personality, which others like very much.  Their hard work helps them to achieve their goals.  But in married life, they may have disappointments.  '
            ]
        ];
        DateDetail::insert($data);

    }
}

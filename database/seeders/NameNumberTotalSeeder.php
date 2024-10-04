<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NameNumberTotal;

class NameNumberTotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'number' => '1',
                'rulling' => 'SUN ',
                'contributting_planet' => 'SUN',
                'for_bussiness' => ' This number should be avoided for business name number.  ',
                'details' => 'Number 1 is very auspicious. The progress chart for such a person would slope downward. Beginnings would be good but will not be able to achieve the end results due to issues such as confusions, unnecessary complications, ego, inflexibility etc. The number does not have qualities that lead to success, so in short, an unfavourable number for name. '
            ],
            [
                'number' => '2',
                'rulling' => 'MOON ',
                'contributting_planet' => ' MOON ',
                'for_bussiness' => ' This number is not good for business but if having a backbone to stand, then can work. Moon alone is too weak to support.  ',
                'details' => 'This is the number of expansions. They rise very fast in life. They do not rest until they have accomplished their goal. They are quick decision makers and are good communicators.  Money flows in abundance. They are likely to suffer from headache and eyesight issues.  '
            ],
            [
                'number' => '3',
                'rulling' => 'JUPITER ',
                'contributting_planet' => 'JUPITER',
                'for_bussiness' => ' This is a good number for business and has the blessing of a guru. If compatible with the person, it can touch heights.     ',
                'details' => 'Number 3 is the number of progress. They have the ability to scale heights owing to their sharp intellect, high spiritual values and communicative nature. They can be great scholars or holding high degrees.  They have a good name in society and are looked up to for advice and can make good counsellors. '
            ],
            [
                'number' => '4',
                'rulling' => 'RAHU ',
                'contributting_planet' => 'RAHU',
                'for_bussiness' => ' Good if they are in gambling, speculation, etc.',
                'details' => 'They get influences very easily by others in their life, be it family, or friends. Rahu is head without body so lot of mindless thinking happens so chances of psychological disorders cannot be ruled out. They should practice caution while interacting or it can spoil their already little social circle that they have. '
            ],
            [
                'number' => '5',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' MERCURY',
                'for_bussiness' => ' This number ensures success in business. Business has good earnings.',
                'details' => 'They are innovative, disciplined, fair, hardworking, calculative, honest, liked by all, creative, communicative are a few traits possessed by name no. 5. They enjoy success both in academics and career. They have the ability to garner a lot of fame and name. They strike a perfect balance between the physical and the spiritual world. '
            ],
            [
                'number' => '6',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' VENUS',
                'for_bussiness' => ' This number is good for business. Business would earn handsome profits.      ',
                'details' => 'These are the people who enjoy peace and happiness and usually surrounded by a lot of friends. Their life is full of comforts and are lovers of luxury. Things come to them slowly but are steady. Relationships carry a lot of importance in their life.   '
            ],
            [
                'number' => '7',
                'rulling' => 'KETU ',
                'contributting_planet' => ' KETU ',
                'for_bussiness' => ' This number is not associated with material things, and business runs for profit, making this number a complete avoid.     ',
                'details' => 'Number 7 has divine blessings in their life. These people are seekers of deeper meaning in life.  They have the ability to rise above the worldly matters easily ad focus on matters which have real in meaning life. They find most of their answers within and therefore believe in less interaction. They rise above emotions and desires and are able to see things clearly. '
            ],
            [
                'number' => '8',
                'rulling' => 'SATURN  ',
                'contributting_planet' => ' SATURN',
                'for_bussiness' => ' Number 8 will encounter lockouts, labor scarcity, strikes, or other situations beyond control. It is advisable to avoid it. ',
                'details' => 'This number denotes a life full of hardships. Lots of efforts are required for these people to succeed in life.  It is a good number, who seek moksha. They are prone to accidents, dangers, uncalled situations etc. Spirituality would add meaning to their life. They possess some administrative skills which can help them in their work area. '
            ],
            [
                'number' => '9',
                'rulling' => 'MARS ',
                'contributting_planet' => ' MARS ',
                'for_bussiness' => ' A business engaged in manufacturing things related to fire or security can use this as the name number, provided it is compatible. ',
                'details' => 'Since the number is dominated by Mars, such people are action oriented, always on the go.  Aggression is prominent. Their motto in life is to achieve success. They have the power to overcome any kind of adversity. They are courageous, intolerant, argumentative, harsh, determined are what make up such people. They love a comfortable and prosperous life. '
            ],
            [
                'number' => '10',
                'rulling' => 'SUN ',
                'contributting_planet' => ' SUN',
                'for_bussiness' => ' It indicates financial gains and all-around expansion. A very favorable name for government organizations being ruled by the Sun. ',
                'details' => 'This number is much better than the name number 1, being followed by 0.  Their life is like a revolving wheel, with its share of ups and `downs but every time they hit their low, they are able to organise the resources and the means, to get back on track in order to keep the momentum going.  They can be relied upon for everything even for matters such as pushing a project through or meeting deadlines. '
            ],
            [
                'number' => '11',
                'rulling' => 'MOON',
                'contributting_planet' => ' SUN',
                'for_bussiness' => ' Successful in areas such as interior decoration, chemicals, petroleum, arts, and publicity.      ',
                'details' => 'Such people will be let down by near and dear ones and are therefore required not to depend on them or there would be high chances of betrayal. They would experience lot of internal as well as external conflict. Being blessed with the spirit of fortitude and their faith in God, even eventually emerge out victorious from a difficult situation. '
            ],
            [
                'number' => '12',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' SUN AND MOON   ',
                'for_bussiness' => ' This number gives hard work, but Moon will bring in its ups and downs. ',
                'details' => 'Such people can influence others very easily. Their speech is so powerful that people get attracted towards them. They do a lot of social work for the people, even to the extent of sacrificing their lives. Success would come by only in the later years of life. The number does not have any influence on career or education in any way. Such people are advised to change the spellings of their names to avoid sacrificial life. '
            ],
            [
                'number' => '13',
                'rulling' => 'Rahu ',
                'contributting_planet' => ' SUN AND JUPITER',
                'for_bussiness' => ' Business is not advised to have name number thirteen.      ',
                'details' => 'Considered to very inauspicious name number. Unexpected, Unknown events, of sorrowful nature is one of the characteristics of their life. Men having name number as 13 earn ill repute and are of bad character. They are easily attracted to women and face a lot of difficulties because of women. They can rise materially but will have a miserable life full of struggles and difficulties. The number opens the way for people who want to advance the spirituality. '
            ],
            [
                'number' => '14',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' SUN AND RAHU   ',
                'for_bussiness' => ' Good for businesses involving communication with the masses (public speaking, writing, publishing).     ',
                'details' => 'They are always surrounded by people. They do really well in the field of mass communication & politics.  People listen very attentively to whatever they say. Their career graph slopes upwards, rising with their advancing age. They have speculative tendencies and are rewarded there as well. Prosperity, luck, support from others will flow throughout their lives. They tend to get extremely confident and over ambitious which should not be the case.   '
            ],
            [
                'number' => '15',
                'rulling' => 'VENUS',
                'contributting_planet' => ' SUN AND MERCURY',
                'for_bussiness' => ' Good number for success in arts and science. Can do well in politics also.    ',
                'details' => 'They are usually charming and know how to put their point forward. People having this number would do really good in the field of arts. They enjoy all luxuries in life and get the support of their friends and family. If the birth number is also favourable, they can achieve wealth, fame and distinction in all areas of life.   '
            ],
            [
                'number' => '16',
                'rulling' => 'KETU ',
                'contributting_planet' => ' SUN & VENUS    ',
                'for_bussiness' => ' This number is equally destructive for businesses.',
                'details' => 'They face many ups and downs in life. They face unexpected hurdles in life. The fall can be from a position, office, grace or power. This number is also associated with accidents, disappointments, and some fatal accident. A person having a name number 16 should be advised to change it with immediate effect.   '
            ],
            [
                'number' => '17',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' SUN AND KETU   ',
                'for_bussiness' => ' Good number for astrologers, poets, musicians, and artists.',
                'details' => 'They face lots of struggles in their life. But even then, there is no stopping the person’s rise to fame and glory. They key point to note here the struggle is continuous and the person does not give up, only then the name number would act and show its results. They are strong people and have the strength to defeat their opposition.  '
            ],
            [
                'number' => '18',
                'rulling' => 'MARS ',
                'contributting_planet' => ' SUN AND SATURN ',
                'for_bussiness' => ' Not a good name number to have for business with so much negativity around it.',
                'details' => 'The association of these three planets (mars, sun and Saturn) denotes negative forces at work.  This number is devoid of divinity, will bring in troubles, dangerous foes and devious thinking. They take the evil path and prove to an anti-social element for the society. Their personal ambition takes so much weightage in their life. They face threats from unknown enemies, sharp weapons and even bombs. '
            ],
            [
                'number' => '19',
                'rulling' => 'SUN ',
                'contributting_planet' => ' SUN AND MARS   ',
                'for_bussiness' => ' A good number that can be used by business establishments. Rise would be by leaps and bounds.    ',
                'details' => 'This is one of the most favourable numbers indicating successful completion of a task.  With the dual influence of sun on the number success is the declaration of this number.  Since the number starts with the first number and ends with the last number, they proper gradually in life. As they grow, they become famous and wealthy. They will amass huge wealth. '
            ],
            [
                'number' => '20',
                'rulling' => 'MOON ',
                'contributting_planet' => ' MOON ',
                'for_bussiness' => ' Good for religious organizations and meditation centers.   ',
                'details' => 'They have a very powerful imagination. They can be termed as ‘divine souls’ sent for this particular purpose.  If such a person takes the spiritual path, life runs very smoothly.  Delays and obstacles can be one of the characteristics associated with these people but that can overcome by practicing meditation. '
            ],
            [
                'number' => '21',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' MOON & SUN     ',
                'for_bussiness' => ' A good number for business establishments.     ',
                'details' => 'They are excessively self-centred and are concerned with matters profitable to them. With great determination, they have the ability to rise in life and scale new heights. They can take time to get successful. Their efforts would be noticed. They would be bestowed with wealth, name and fame. They will achieve and retain high positions permanently in their lives. '
            ],
            [
                'number' => '22',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' MOON ',
                'for_bussiness' => ' Not good for business.      ',
                'details' => 'There is high level of moon energy and have a weak aura around them. Since they are very emotional, their mental health and happiness would be affected. These people are more governed by evil than good. Initially they can be compromising, but later on the person will get into evil ways by the turn of events. They would earn more money through devious ways like gambling, betting on horses etc. They face the difficulties life throws at them bravely. '
            ],
            [
                'number' => '23',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' MOON & JUPITER ',
                'for_bussiness' => ' A good number for business, compatible with most driver and conductor numbers.',
                'details' => 'The combination of Moon & Jupiter enables them to succeed in life. They will be recognized & appreciated with their talent.  They cannot be deviated from their track and have the ability to win over competition. Friends would be of great help. They are the most sort after people in government as well as private enterprises.   '
            ],
            [
                'number' => '24',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' MOON & RAHU    ',
                'for_bussiness' => ' Very good business name number. Fast progress in uniformed services.',
                'details' => 'Name number 24 holds a very high position in government or will receive lot of favours from government. They can gain a lot from the opposite sex. They will get married to the person, who is having very good position in government sector and is having all the luxuries. They will progress with each passing day. They focus a lot on enhancing their outer beauty so they believe in expanding their resources on beauty products and jewellery etc. They lead a disciplined life. '
            ],
            [
                'number' => '25',
                'rulling' => 'KETU ',
                'contributting_planet' => ' MOON & MERCURY ',
                'for_bussiness' => ' Not good for business due to hurdles on the path of growth. A good number for research-related work and occult sciences.    ',
                'details' => 'This is a good number to have as it gives results in the end.  They will face struggles in their personal life as well as in professional life. They will get success only if are facing difficulties and struggling to get them in his life. They have good intuitive powers. They lead a disciplined life. Their writing and speech are powerful. The lives of these people will end with honour and respect though their personal life. '
            ],
            [
                'number' => '26',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' MOON & VENUS   ',
                'for_bussiness' => ' Unlucky for business; projects fail to finish on time.     ',
                'details' => 'This number denotes debts in the later stages of our age. They spend lavishly even beyond their means.  Friends are of no use at this point. Be careful while making investments and should not take advice from others. They face unending, confusion in their mind.  They would do anything for the sake of the money. In spite of having good ideas, success would still be a dream for them. '
            ],
            [
                'number' => '27',
                'rulling' => 'MARS ',
                'contributting_planet' => ' MOON & KETU    ',
                'for_bussiness' => ' Guarantees success and profits to driver and conductor numbers.   ',
                'details' => 'They are the ones with great wisdom and immense knowledge. They have high authority, command, fame, and power. This number represents hard work, clarity of mind, intelligence, hold over wealth, prosperity, and positions with high regard. People with this name number should carry out their tasks independently. These people have the zest to do things for the society. They also make huge profits from their hard work. They are likely to get involved in meditation, hypnotism, knowledge of magic, astral travel, and telepathy. '
            ],
            [
                'number' => '28',
                'rulling' => 'SUN ',
                'contributting_planet' => ' MOON & SATURN  ',
                'for_bussiness' => ' Not a good number for business; influence of Moon and Saturn is dangerous.    ',
                'details' => 'Such people face lot of hardships in life. They have to start their projects again and again to get success. This number indicates loss through trust in others, competition, non-compliance with the legal aspects and opposition. They progress in undoubtedly fast but is followed by losses.  Money lent by such people will never come back. These people are advised to make in change in their name. '
            ],
            [
                'number' => '29',
                'rulling' => 'MOON ',
                'contributting_planet' => ' MOON & MARS    ',
                'for_bussiness' => ' Business would be internally weak; not recommended.',
                'details' => 'They get involved in litigation to settle their disputes. They will be let down by family and friends. They may face problems due to opposite sex. They live an unhappy life with their partner, a life full of agony and disappointments. They can commit suicide by the opposite sex. They need to change their name. '
            ],
            [
                'number' => '30',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' JUPITER ',
                'for_bussiness' => ' Not a good number for business.',
                'details' => 'These people possess a lot of mental discipline, they know their mind and know how to conquer it easily. They have a highly imaginative mind. They would jump into a difficult task if their mind so guides. They do not have much interest in making money. They succeed in everything they undertake and do not believe in compromising. '
            ],
            [
                'number' => '31',
                'rulling' => 'Rahu',
                'contributting_planet' => ' JUPITER & SUN  ',
                'for_bussiness' => ' Good for spiritualism and research-related work. ',
                'details' => 'They work according to their own rules and mind. They do not care about profit and loss.  They only do what they want to. Don’t care about others. They have interests in astrology, yoga, medicine and gaining knowledge of the Vedas or anything that involves deep research.  
 They are not driven by profits so it isn’t a very good number for material gains. As they grow older, they become intuitive and sense their death well in advance'
            ],
            [
                'number' => '32',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' JUPITER & MOON ',
                'for_bussiness' => ' Can be used only if compatible with driver and conductor numbers; otherwise, not capable of giving results.',
                'details' => 'This number has the ability to attract people and would have a captivating speech. This number has the vibrations of making a person a prominent personality. They have the ability to propagate new ideas and concepts. They will attain high positions in life and will remain youthful in appearance even when they age. '
            ],
            [
                'number' => '33',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' JUPITER ',
                'for_bussiness' => ' A good number for business; ensures a never-ending flow of funds. ',
                'details' => 'This is a very special number in numerology. This number is very unique in many ways. These people are blessed to achieve spiritual enlightenment automatically without much of an effort. Women unable to conceive should be advised to use 33 as the name number to produce healthy off springs. These people have luck going for them so a really good number to have as a name number. '
            ],
            [
                'number' => '34',
                'rulling' => 'KETU ',
                'contributting_planet' => ' JUPITER & RAHU ',
                'for_bussiness' => ' Good for business; promises material gains easily.',
                'details' => 'This name number make people prone to addictions like women, alcohol etc.  they will have a disturbed family life. Material prosperity isn’t a problem. They make a lot of money that too from various sources. They are not liked by people but they still will have a social standing owning to the wealth they amass. '
            ],
            [
                'number' => '35',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' JUPITER & MERCURY     ',
                'for_bussiness' => ' Not a good number for business. ',
                'details' => 'They have the ability to bestow the person with all kind riches. They are prone to accidents, legal issues, getting drawn towards illegal ways of making money, drinking etc. Friends and family will be of little no help at all.  They can go to any extent to make or earn money. Can face the issues like physical ailments like paralysis or issues related to nervous system. '
            ],
            [
                'number' => '36',
                'rulling' => 'MARS ',
                'contributting_planet' => ' JUPITER & VENUS',
                'for_bussiness' => ' Can lead to wrong decisions and losses in business. ',
                'details' => 'They achieve a lot of success through hard work. They can make a fortune if they use their talents well. Those who don’t move out of their native place don’t have luck by their side.  These people have the ability to rise from bottom to top. They enjoy good positions and travel extensively. Support from friends and family does not exist for them.  in astrology, yoga, and deep research. Becomes intuitive with age.    '
            ],
            [
                'number' => '37',
                'rulling' => 'SUN ',
                'contributting_planet' => ' JUPITER & KETU ',
                'for_bussiness' => ' Highly successful for business; makes the business attractive.    ',
                'details' => 'This no gives great power and confidence. It is one of the lucky numbers to have as name number. It can raise an ordinary person to an extraordinary level. They lead a comfortable and prosperous life and have the company of good friends. They are usually the centre of attraction wherever they go. Ordinary people should use this number to take benefits or to rise in life. '
            ],
            [
                'number' => '38',
                'rulling' => 'MOON ',
                'contributting_planet' => ' JUPITER & SATURN      ',
                'for_bussiness' => ' Not suitable for business due to potential disastrous outcomes.   ',
                'details' => 'They are honest, peace lovers, spiritually inclined, great integrity, gentle and innocent.  This name number can bring lots of success in their life.  Such people progress to fame easily even if they make small beginnings. Despite the good features, this number can cause expected dangers, unknown enemies that can crop up any time. '
            ],
            [
                'number' => '39',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' JUPITER & MARS ',
                'for_bussiness' => ' A good number for business. ',
                'details' => 'These people are sincere, hardworking and of high intellect. Even the name, fame and credit they earn is just because of their name number. They can work nonstop and would do anything for them because of their hard work is enjoyed by others. They are frequent flyers for work related purposes. They enjoy pleasures in the later part of life as that part of life is hassle free. '
            ],
            [
                'number' => '40',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' RAHU ',
                'for_bussiness' => ' Promises quick success but can invite jealousy; good for material success.    ',
                'details' => 'These people possess a lot of intelligence and achieve success in literary work & business.  They have a lot of dependable friends who help them to rise and achieve desired positions in life.  They can go to any extent to achieve their goals. Eventually, they will lose all of their money and their life will turn out to be fruitless.  They may have to suffer in isolation & will be totally neglected. '
            ],
            [
                'number' => '41',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' RAHU & SUN     ',
                'for_bussiness' => ' Good number for business.   ',
                'details' => 'These people are very impressive, having good controlling power and can lead a group.  They are liked by all and enjoy fame in their life. They get more than they deserve and don’t afraid to take risks. They joy international fame. They need to work on their ego or should control it, otherwise they will take lot of time to get success. They need to walk the success journey cautiously and not let success get into their head or it will destroy them.   '
            ],
            [
                'number' => '42',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' RAHU & MOON    ',
                'for_bussiness' => ' Great for businesses dealing in luxury items, shipping, and export/import.    ',
                'details' => 'This is a very good name number. They are dynamic, always on the go and well built.  They have the ability to rise in life. They enjoy ever-lasting fame and wealth.  They are good in planning, managing money and spending it. They are full of confidence, courage, and will power.  Opportunities keep coming to them and they grab it with both hands and make the most of it. '
            ],
            [
                'number' => '43',
                'rulling' => 'KETU ',
                'contributting_planet' => ' RAHU & JUPITER ',
                'for_bussiness' => ' Suitable for businesses in the occult field; otherwise, should be avoided.    ',
                'details' => 'This is the number of revolution and destruction. They are highly imaginative and have great writing skills.  They are used to switch jobs very frequently. Success is achieved and desires are fulfilled only in the end. They are known for making controversial statements.  They will face more opposition than support.  Public welfare is something they look forward to but will not be known for it. '
            ],
            [
                'number' => '44',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' RAHU ',
                'for_bussiness' => ' Good for businesses involved in iron, steel, coal, sports, vehicles, or banks.',
                'details' => 'This number should be avoided (those who are on high posts and authority) as this number name can spoil their name in the society.  They can earn money very easily.  These people need to control their mind otherwise they don’t mind to take evil path for fulfilling their achievements.  This number can bring lot of pain and shame for the people.  They may have sufferings both mental and physical.  They have danger from fire and electricity. '
            ],
            [
                'number' => '45',
                'rulling' => 'MARS ',
                'contributting_planet' => ' RAHU & MERCURY ',
                'for_bussiness' => ' Shines in stock market-related businesses.     ',
                'details' => 'A very good name number. They have the calibre to rise to a higher level and get a high position in society. They can even run a huge business house. They will be role-models for people and their life would be well endowed. They set goals and then achieve it. They do face lot of difficulties in life but do not believe in sharing. They pay a lot of attention to detail and acquire long lasting wealth. '
            ],
            [
                'number' => '46',
                'rulling' => 'SUN ',
                'contributting_planet' => ' RAHU & VENUS   ',
                'for_bussiness' => ' If conducted fairly, this number can make a business a market leader.',
                'details' => 'This number indicates knowledge, intelligence etc. If any person takes full use of this number, can become an international star. They also possess leadership qualities and have the talent to take their business to the top. As they progress in age, they make money and fame. They will be remembered for their achievements.  For them, honesty and luck have a direct relationship. '
            ],
            [
                'number' => '47',
                'rulling' => 'MOON ',
                'contributting_planet' => ' RAHU & KETU    ',
                'for_bussiness' => ' Very good number for business, requiring only mental skills.      ',
                'details' => 'This is the number of expansions. They rise very fast in life. They do not rest until they have accomplished their goal. They are quick decision makers and are good communicators.  Money flows in abundance. They are likely to suffer from headache and eyesight issues.  
 They are quick at finding fixes for problems. '
            ],
            [
                'number' => '48',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' RAHU & SATURN  ',
                'for_bussiness' => ' Not a number for worldly success; unsuitable for business. ',
                'details' => 'People having the number of 48 will be found at the wrong place, at the wrong time and become victims. They are keenly interested in spiritual sciences. They would do a lot for the welfare of the public. They earn money and wealth but eventually lose everything as luck doesn’t favour them. They are interested in pilgrimages. '
            ],
            [
                'number' => '49',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' MARS & RAHU    ',
                'for_bussiness' => ' Experiences fallouts but gains valuable experience for efficient management.  ',
                'details' => 'They strongly believe in establishing order and balance in life. Their life is the envy of many. They acquire sudden wealth and fame. Life throws a volley of wonderful experiences at them along with prosperity. They own a lot of immovable properties. They can earn a lot of money from business/profession related to arts. They are prone to accidents and also have the danger of being burnt to death. '
            ],
            [
                'number' => '50',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' MERCURY ',
                'for_bussiness' => ' Gives the business the power to outshine and flourish for a long time. ',
                'details' => 'They are extremely intelligent and possess a high degree of analytical skill. They are excellent speakers, self-confident. They are sharp minded and quick decision makers. They can be good educationists. They are intelligent and hardworking people. They have special expertise in maths, science, law and astrology.   '
            ],
            [
                'number' => '51',
                'rulling' => 'VENUS',
                'contributting_planet' => ' MERCURY & SUN  ',
                'for_bussiness' => ' A very good number for business; ensures rapid growth and attention.',
                'details' => 'This is the most powerful number. They get inflow of money from unexpected sources. They have the ability to become famous.  They also possess the physical strength & will power to keep moving. They constantly think of ways to enhance their wealth. These people tend to have a disturbed sleep due to constant action in mind and body because they work tirelessly.  
 They have a wide circle of friends and relatives. '
            ],
            [
                'number' => '52',
                'rulling' => 'KETU ',
                'contributting_planet' => ' MERCURY & MOON ',
                'for_bussiness' => ' Experiences many ups and downs in business.    ',
                'details' => 'In this number 52, mercury overpowers the moon.  Mind is an observer it is the intellect which helps us to decide between the good or the bad based on the experience. They have a good insight and high developed intuitive power. They are very good counsellor and will be ready to offer a solution to any problem. They will be liked by all and people remember them even after their death. '
            ],
            [
                'number' => '53',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' MERCURY & JUPITER     ',
                'for_bussiness' => ' Not a good number for business; leads to losses, accidents, court cases, and theft.  ',
                'details' => 'They are go-getters, possess the inner strength, discipline to keep going even when the odds are against. They can be best described by ‘when the going gets tough’ they get going. As they grow old, life tends to normal and becomes steadier. They have a strong desire to be famous. They face difficulties which breaks them but they gather themselves up and get going. '
            ],
            [
                'number' => '54',
                'rulling' => 'MARS ',
                'contributting_planet' => ' MERCURY & RAHU ',
                'for_bussiness' => ' Not good for the financial health of a company; should be ignored.',
                'details' => 'They grow step by step in life. These people have material wealth earned through hard work and inheritance. They know how to best utilize their abilities and wealth. Their life is a mixed bag comprising of success and failures. They can be good counsellors owing to their captivating speech. This number should be best avoided as name number. '
            ],
            [
                'number' => '55',
                'rulling' => 'SUN ',
                'contributting_planet' => ' MERCURY ',
                'for_bussiness' => ' A good number for business; will make the business a leader in its field.     ',
                'details' => 'They have a head full of information and are intelligent. They face opposition in life but opposition doesn’t stand any chance to win in front of them. They can obtain high degrees and can also be termed as scholars. If they make the best use of their knowledge, they can become famous. This number has the power to even cure genetic diseases. '
            ],
            [
                'number' => '56',
                'rulling' => 'MOON',
                'contributting_planet' => ' MERCURY & VENUS',
                'for_bussiness' => ' Useful for making progress in business.',
                'details' => 'This is a number full of wonders as it is made up of two numbers which have different vibrations.  This number is used by people born on 7 and are involved in occultism, divination experts etc. because the presence of the moon, these people have psychic abilities.  
 They are intelligent.  They have an unsteady life and can their wealth and fame all at once.  But the pleasures gained temporarily far outnumber the problems brought by unsteadiness. '
            ],
            [
                'number' => '57',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' MERCURY & KETU ',
                'for_bussiness' => ' Not a good business name number.',
                'details' => 'Not a good number in numerological series as it signifies defeat. Life moves at a very fast pace; the rise and the decline are both sudden and life comes to a standstill. They are not able to gather wealth. In order to improve their situation, they need to look at the situation closely and act after properly understanding it. If the conflicts in their mind remain unresolved, their life would become monotonous and stagnant. '
            ],
            [
                'number' => '58',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' MERCURY & SATURN      ',
                'for_bussiness' => ' Businesses stay in the public eye for long; financially strong.   ',
                'details' => 'They can easily attract the attention and interest of people. These people work diligently & progress swiftly in life. They will have a lot of achievements to their name. Due to the presence of Saturn, they are narrow minded. They are the treasure of knowledge. To the world, these people would appear to be really blessed and lucky but internally they will have a lot of fears. '
            ],
            [
                'number' => '59',
                'rulling' => 'MERCUTY ',
                'contributting_planet' => ' MERCURY & MARS ',
                'for_bussiness' => ' Solid inflow of money; a good business name number. ',
                'details' => 'They are researchers, inquisitive and expressive. They are poets, lyrists, writers and literary men of the world. Their writings have a sense of humour. They need to keep a check on their eating habits or it can impact their health adversely. They get a lot of public support. They earn a lot of money. They gain due to their hard work and creativity. They go up the ladder of success step by step. '
            ],
            [
                'number' => '60',
                'rulling' => 'VENUS',
                'contributting_planet' => ' VENUS ',
                'for_bussiness' => ' A good number for business. ',
                'details' => 'They enjoy a life full of riches and comforts. They can carry out a debate very well. They have a happy & peaceful family life. This number signified prosperity, growth, and wisdom.  They are humble and have a huge friend circle. They have a pleasing personality. They can have a profession which involves engaging & entertaining people, art related or anything that requires writing or speaking skills. '
            ],
            [
                'number' => '61',
                'rulling' => 'KETU ',
                'contributting_planet' => ' VENUS & SUN     ',
                'for_bussiness' => ' Not a good number for business. ',
                'details' => 'These people are attractive. They are the centre of attraction when moving in the crowd.  They will attract a lot of people towards themselves.  Their way of functioning would be dynamic. People would admire them for their above-mentioned qualities. These people can be leaders or speakers in areas of spirituality. They do not expect anything in return. They cannot tolerate dishonesty. '
            ],
            [
                'number' => '62',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' VENUS & MOON    ',
                'for_bussiness' => ' Not a good name number for business.   ',
                'details' => 'Their life is a mix of happiness and sorrows. They have the ability to turn their friends into enemies. They have a disturbed family life and have bad relations with relatives. They are addicted to liquor, gambling and women. They are day dreamers. They have a lot of sexual relationship and are therefore subject to sexually transmitted diseases. '
            ],
            [
                'number' => '63',
                'rulling' => 'MARS ',
                'contributting_planet' => ' VENUS & JUPITER ',
                'for_bussiness' => ' Not good for business; leads to losses and eventual closure.      ',
                'details' => 'This number is made up of the Guru of Gods (Jupiter) and Guru of Demon (Venus). It is not a very good number. Such people have a neglected childhood and therefore get into evil eyes. They face a lot of difficulties in life, even when they try to achieve a small thing. They want to make money at any cost.   '
            ],
            [
                'number' => '64',
                'rulling' => 'SUN ',
                'contributting_planet' => ' VENUS & RAHU    ',
                'for_bussiness' => ' An average number for business; better if in sync with the driver number.     ',
                'details' => 'These people are blessed with sharp knowledge and strong will power. They have equal number of friends and enemies. Though they face a lot of opposition in life, they manage to emerge out victorious. They can do anything and thus have a name in society. They are very well respected in the family. A number like this is more suited to people with whose birth number is in sync with the name number. '
            ],
            [
                'number' => '65',
                'rulling' => 'MOON ',
                'contributting_planet' => ' VENUS & MERCURY ',
                'for_bussiness' => ' There would be no growth in business. Hence, not a good number. ',
                'details' => 'These people work for public welfare. They can gather a lot of support from influential people for the social work they do. This number denotes divine grace and spiritual development. Due to the impact of moon, their life is characterised by a lot of ups and downs. 
 These people get into unexpected.  '
            ],
            [
                'number' => '66',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' VENUS ',
                'for_bussiness' => ' A number such as this can be used for business but not by people having Driver Number 8. ',
                'details' => 'This is a very good number in numerology. This name number shouts accomplishments on all the fronts – professional, emotional, physical and financial. These people have excellent oration skills and can sweep the audience off their feet. The presence of Jupiter helps in accessing the situation and helps in differentiating between the good and the bad. '
            ],
            [
                'number' => '67',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' VENUS & KETU    ',
                'for_bussiness' => ' A name number suitable for businesses involving publishing books on religion and spirituality, or women-related businesses. ',
                'details' => 'This number is made up of creativity. These people are exceptional artists and make money by way of it. They are hardworking people and have the ability to work tirelessly. They earn a lot of money. They can be good dancers, musician, and go in film making. People with such number have a spiritual bent of mind too, they can also earn through writing books on spirituality or conducting spiritual discourses. '
            ],
            [
                'number' => '68',
                'rulling' => 'MERCUTY ',
                'contributting_planet' => ' VENUS & SATURN  ',
                'for_bussiness' => ' A number that can lead to bankruptcy of the business; always results in losses. Not a good number. ',
                'details' => 'This number brings a lot of failure. Venus is the plus in the number. They get into tasks they cannot complete and the suffering follows. They have greed to make money which spoils their career and life. They always remain dissatisfied. But they are on the go all the time, and keep themselves busy in other activities. They can do business related to iron, heavy machinery, vehicles etc. '
            ],
            [
                'number' => '69',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' VENUS & MARS    ',
                'for_bussiness' => ' A good number for business. ',
                'details' => 'They bring success. Person gets success slowly. They are persistent in their efforts and thus achieve success. They do not require any assistance. They have a majestic appearance. They have certain royalty about their speech and actions. They depend on tried and tested ways of doing a task. These people have a good family life. They enjoy collecting artwork and spend freely time on art. '
            ],
            [
                'number' => '70',
                'rulling' => 'KETU ',
                'contributting_planet' => ' KETU',
                'for_bussiness' => ' Not a good name number for business; it may lead to dissatisfied customers. ',
                'details' => 'These people will have a lot of interest in spirituality and matter related to God.  Presence of zero in the number signifies infinity. Such a number has the power to go to the depths of spirituality. They live a simple life and not driven by money. Love, relationships don’t hold a place in their life. Family life is bit disturbed. '
            ],
            [
                'number' => '71',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' KETU & SUN      ',
                'for_bussiness' => ' Not a good business name number; financial losses and poor customer handling are likely. ',
                'details' => 'These people are little confused and having less confidence. We can’t trust them if want to take advice as they have lack of clarity. But gradually, these people garner knowledge and leadership qualities as they are having Sun in their name number. They need to understand that they can be wrong with their decisions initially but eventually, things will automatically start falling in place but damage caused by initial years cannot be made good so such a number should be avoided.   '
            ],
            [
                'number' => '72',
                'rulling' => 'MARS ',
                'contributting_planet' => ' KETU & MOON     ',
                'for_bussiness' => ' Very good number for business; businesses with this number make huge profits and gain global recognition. ',
                'details' => 'These people will get success with the time.  As we all know, slow & steady wins the race’, they might suffer in the initial years, but will get success later on. They enjoy a luxurious life.  Wealth acquired is so much that future generations will enjoy it as well. Ketu gives great knowledge & intuition to do anything and moon gives creative imagination. In totality, Mars gives extraordinary skills to face hurdles coming in the way. Mars make sure that the task they take up gets completed with success. '
            ],
            [
                'number' => '73',
                'rulling' => 'SUN ',
                'contributting_planet' => ' KETU & JUPITER  ',
                'for_bussiness' => ' A very good business name number, provided the person is honest. Otherwise, it could do more harm than good. ',
                'details' => 'These people will have highly developed intuition skills, psychic power and knowledge.  They earn name, fame and wealth. These people can lead higher positional especially in the government sector. They can have multiple sources of income. It is very important for people to be honest and keep their integrity intact, else they can lose their money and reputation.  
 Such people are devoted to God and spiritual.   '
            ],
            [
                'number' => '74',
                'rulling' => 'MOON ',
                'contributting_planet' => ' KETU & RAHU     ',
                'for_bussiness' => ' Not a good number for business. ',
                'details' => 'This is a very contradictory number. No. seven makes the person spiritual while no. 4 wants to take up the most unconventional route to get success. This is a number of self-destructions. 7 & 4 are already treading on different paths with one preaching religion and other preaching against the usual. Regretting the past and anxious about the future, they spoil their present. 
 Their finances are in bad shape, family life disturbed, no stability in life. '
            ],
            [
                'number' => '75',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' KETU & MERCURY  ',
                'for_bussiness' => ' Not a very good name for business. ',
                'details' => 'Number 75 denotes that the person good in his academics. They are extremely talented in studies as well in extra activities. They are creative & talented as an author, poet, lyricist or writer. They are interested in home affairs or marriage. They can delay their marriage or can lose interest after that. Friendships they make are rock solid. They are driven by their vision and become famous. '
            ],
            [
                'number' => '76',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' VENUS & KETU    ',
                'for_bussiness' => ' Not a very good business name number. ',
                'details' => 'Ketu dominates the number as it starts from 7 these people have less inclination to make money. Though they are financially and professionally settled. They have a disturbed married life and prefer to live in solitude. They spent their last years in solitude but other than that they keep going in their life. They work selflessly for the upliftment of others also. They will earn name, fame, knowledge and divine grace. '
            ],
            [
                'number' => '77',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' RAHU',
                'for_bussiness' => ' Very good business name number; ensures growth and profits. ',
                'details' => 'Since 77 is having two 7, this confers divine blessings on them. If they take the divine path, life would be full of happiness with all the luxuries. They have a lot of foreign travel. Good character, God fearing, well respected are their traits. They got a lot of support from others also.  If they take the right path in life, they will have a good married life. '
            ],
            [
                'number' => '78',
                'rulling' => 'VENUS  ',
                'contributting_planet' => ' KETU & SATURN   ',
                'for_bussiness' => ' Businesses rise without much effort; very good name number for business. ',
                'details' => '7 followed by 8 and leading no. 6 is what makes this number brilliant. Caring, charitable and nurturing without an expectation of a reward is what makes up 78. They don’t run after money, but money comes to them in abundance automatically. They can make the person orthodox also. They can be good poets, and an ability to cast a spell on other. Such qualities enable them to motivate people. '
            ],
            [
                'number' => '79',
                'rulling' => 'KETU ',
                'contributting_planet' => ' KETU & MARS     ',
                'for_bussiness' => ' Not recommended for business as it would hamper continuous profits. ',
                'details' => 'They face lot of hurdles in life. Whatever they do in life, is a complete failure. They have a poor childhood but rise very quickly later in life due to their never say die spirit. The knowledge and experience they garner in the early stages of their life helps in getting a successful path due to any failures. Family life is little unstable but they would be of great help to those who depend on them. They get immense support which helps them to lead a comfortable and successful life '
            ],
            [
                'number' => '80',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' SATURN',
                'for_bussiness' => ' This number should be avoided for business. ',
                'details' => 'This is not a good name number. It gives lot of struggles in life. Since the beginning of life, the person will face hardships in relation to education and day to day living. Health issues, they can even face some undiagnosable diseases, this number can give them a criminal instinct and can make them thieves, rapist and terrorists also. They have good stamina and power but of no use as fate is against them. Professional and personal lives are deeply affected.  They should be careful of accidents. '
            ],
            [
                'number' => '81',
                'rulling' => 'MARS',
                'contributting_planet' => ' SATURN & SUN    ',
                'for_bussiness' => ' Not good for business due to risks and potential accidents. ',
                'details' => 'This is a fortunate number. Their personal and professional life is very good. They will enjoy health, wealth, name & fame and all the luxuries of life. They will have a lot of properties in his name. Sun and mars together increase the fire element in the number, sun being dominating and mars being arrogant invites a lot of jealousy from people. They would attract unnecessary hatred from the people. Basically, these people have a lot of enemies which can cause them great deal of harm. They should be careful of accidents. '
            ],
            [
                'number' => '82',
                'rulling' => 'SUN ',
                'contributting_planet' => ' SATURN & MOON   ',
                'for_bussiness' => ' Good number for business. ',
                'details' => 'This number is very powerful and can make an ordinary person to an extraordinary one. They can rule the society. They have magnetic powers and would attract many followers. They should be very cautious of their duties and responsibilities. They face unnecessary issue in their love life due to their own adamant nature. They dominate the scene wherever they go.  
 These people should take care from accidents. '
            ],
            [
                'number' => '83',
                'rulling' => 'MOON ',
                'contributting_planet' => ' SATURN & JUPITER',
                'for_bussiness' => ' A big no for business. ',
                'details' => 'No. 83 people are hardworking and dedicated. This number gives high positions in society as well as in work. Everyone respects them. The life of the person is like a king and would carry it with self-confidence. They enjoy success in every field. But since Saturn is also a contributing planet, they need to be careful. Because at the end, Saturn, being a judge would give only what the person deserves. These people will be deceived at the hands of their friends and relatives. '
            ],
            [
                'number' => '84',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' SATURN & RAHU   ',
                'for_bussiness' => ' Avoid this number for business. ',
                'details' => 'The beginning of their life would be struggle some. Poor life style, poor academics, unrecognition of talent are some of the problems they will face in their childhood. This will make them jealous, and insecure. They have the ability to catch incurable diseases in early life. Delays, disappointments would be present throughout their lifetime. They would invite unnecessary enemies. They would have not destination to reach. Spirituality can help them find their lost ground. '
            ],
            [
                'number' => '85',
                'rulling' => 'RAHU',
                'contributting_planet' => ' SATURN & MERCURY',
                'for_bussiness' => ' Not a good number for business; the efforts outweigh the profits. ',
                'details' => 'They need to do a lot of hard work. Life isn’t smooth or roller coaster for them. They face lot of difficulties. But their repeated efforts would give them the good results. But again, they profits are far less than the effort put which leads to disappointments. They need to add karmic debts in their account by helping others. They will really do well in the field of medicines. Due to their extraordinary support to the people, they will get an honourable position. They will be respected & loved by all. '
            ],
            [
                'number' => '86',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' SATURN & VENUS  ',
                'for_bussiness' => ' Initial years are challenging, but the business eventually gains momentum. ',
                'details' => 'These people face lot of hardships and hurdles in life but since Venus is a contributing planet in their life, they will climb up the ladder gradually and get what they deserve. Venus gives them the motivation to perform well and Mercury gives the persistence. These people get a lot of favours which helps them grow and lead a successful life of comforts. Problems in their life don’t break them.   '
            ],
            [
                'number' => '87',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' SATURN & KETU   ',
                'for_bussiness' => ' A big no for business name number. ',
                'details' => 'There is a difference between 78 and 87. In 78, the command was in the hands of Ketu but here, in number 87, command is with No. 8, Saturn. Money that these people would earn would be through devious means like womanising, gambling, criminal activities. They can be criminals, terrorists and extortionists. Due to their no. 7, they would have some mystic powers. These would be kind people who would dress up like a saint and dupe people. They would commit crimes without realizing what and why they are doing. '
            ],
            [
                'number' => '88',
                'rulling' => 'RAHU',
                'contributting_planet' => ' SATURN',
                'for_bussiness' => ' Suitable for spiritual or religious organizations, not for other businesses. ',
                'details' => 'They need to do a lot of hard work. Life isn’t smooth or roller coaster for them. They face lot of difficulties. But their repeated efforts would give them the good results. But again, they profits are far less than the effort put which leads to disappointments. They need to add karmic debts in their account by helping others. They will really do well in the field of medicines. Due to their extraordinary support to the people, they will get an honourable position. They will be respected & loved by all. '
            ],
            [
                'number' => '89',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' SATURN & MARS   ',
                'for_bussiness' => ' Risky number for business. ',
                'details' => 'Their childhood life is miserable. In spite of not being well provided, they do well in studies and develop a talent which makes them outshine others. Their hard work would be rewarded.  They rise in life due to their hard work only. They lead a fearless life and climb the success ladder sooner than their peers. They would make all efforts for ousting out the person. They face a danger of fire accidents. Their married life is good. '
            ],
            [
                'number' => '90',
                'rulling' => 'MARS',
                'contributting_planet' => ' MARS',
                'for_bussiness' => ' A good number for business as it ensures growth. ',
                'details' => 'They will attain success due to their hard work. They can go to any extent to fulfil their dreams. They don’t even afraid of obstacles and hurdles, they just keep going and are unstoppable. Their energy level is very high. They may have many sources of income.  People who wish to advance spiritually, should avoid this number as this gives only riches.  Such people are proud and egoistic. '
            ],
            [
                'number' => '91',
                'rulling' => 'SUN ',
                'contributting_planet' => ' MARS & SUN      ',
                'for_bussiness' => ' Very good business name number. ',
                'details' => 'They have strong determination and possess good technical skills. They have leadership qualifies and can be heading top positions in corporate or government sector. They would not stop until and unless they achieve their goal. They would undertake a lot of journeys for work or otherwise. They would do well in Export/Import. These people will not be attached to wealth and would like going on pilgrimages. '
            ],
            [
                'number' => '92',
                'rulling' => 'MOON ',
                'contributting_planet' => ' MARS & MOON     ',
                'for_bussiness' => ' Avoidable number for business. ',
                'details' => 'These people can be good teachers on subjects related to philosophy, yoga or human welfare.  These people are also intuitive. They find happiness by serving others. If these people continuously practice pranayama or other yoga techniques, they can acquire the power to defy gravity or defy disease & death. '
            ],
            [
                'number' => '93',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' MARS & JUPITER  ',
                'for_bussiness' => ' An appropriate name for business. ',
                'details' => 'These people have the ability to rise to the top and do marvellous things. They improve their worldly knowledge and fulfil their desires. These people can shine in any field it Law, Medicine, Science, Navy, Air Force. People like to take their advice. They are multi-talented and can earn through many businesses even arts or drama. Multiple sources of income would surely be there. They have good writing skills as well. '
            ],
            [
                'number' => '94',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' MARS & RAHU     ',
                'for_bussiness' => ' In the short term, the business would grow and earn normal profits. ',
                'details' => 'These people spend early part of life in acquiring education and in the later years, they learn to apply it. These people can rise up in life, to higher positions. Once the professional life is on track & moving, they would tend to shift their focus on humanitarian activities. They would want to bring about reforms. These people would get support from likeminded people & they would work together for common good of the society. They will be remembered for their good work always. Selflessly, they would work for the betterment of the society.   '
            ],
            [
                'number' => '95',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' MARS & MERCURY  ',
                'for_bussiness' => ' A big no for business name number. ',
                'details' => 'They would be successful in their personal life. As they are having mercury twice in their number, they have the business skill. They are very brilliant and would earn lot of respect and name due to their hard work. They are very disciplined and are perfectionists. Mercury gives them the ability to think out of the box. They are risk takers when it comes to business, but they are calculative also. '
            ],
            [
                'number' => '96',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' MARS & VENUS    ',
                'for_bussiness' => ' Can be used for business name. ',
                'details' => 'A very good and lucky name number. They have excellent educational skills and are good rank holders. They even have a charming personality and are very attractive. They have good control over their subordinates.  they can do well in the field of arts, army officer and Captain in the navy. They lead a respectful, prosperous and fulfilled life. They have a good family life. '
            ],
            [
                'number' => '97',
                'rulling' => 'KETU ',
                'contributting_planet' => ' MARS & KETU     ',
                'for_bussiness' => ' Faces many hurdles in business; not recommended. ',
                'details' => 'These people can take wrong decisions in life and can harm their future. By depending on the wrong people, they can spoil their chances of success also. They can spoil their life by taking wrong decisions under someone’s influence.  hey may also face court cases, imprisonments etc. They can do well in the field of spirituality. '
            ],
            [
                'number' => '98',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' MARS & SATURN   ',
                'for_bussiness' => 'No for this business name number.',
                'details' => 'These people are very intelligent but would not be able to make use of their intelligence to solve their problems and would get into complicated issues. Their life is full of hassle. They can face crisis also. They would not be appreciated for the work they do. They can also affect from chronic diseases. '
            ],
            [
                'number' => '99',
                'rulling' => 'MARS ',
                'contributting_planet' => ' MARS',
                'for_bussiness' => ' If compatible with the Driver number, it can be average, but otherwise not a good number for business. ',
                'details' => 'This number has many ups and downs. Early life will give good education. Such an influence of mars would push them into devious ways. They would think of doing anything to fulfil their dreams.  Desires would be very high. They would take up criminal ways rather naturally to fulfil their desires and ambitions. Unwanted aggression will be used to get things done.   '
            ],
            [
                'number' => '100',
                'rulling' => 'SUN ',
                'contributting_planet' => ' SUN, ZERO',
                'for_bussiness' => ' An average number for business name. ',
                'details' => 'Sun would give initiative, intelligence & drive to succeed but the opportunities that come their way, owing to two zeros’, wouldn’t be in plenty thus wasted talent. Their wealth and prosperity would not be a concern ever in life. These people will have a long and comfortable life without many achievements. But in the later stages, they would take up the path of Divine. '
            ],
            [
                'number' => '101',
                'rulling' => 'MOON ',
                'contributting_planet' => ' SUN, ZERO, SUN  ',
                'for_bussiness' => ' Due to many ups and downs, it would never grow. ',
                'details' => 'These people will get sufficient help from Government. Their efforts wouldn’t be much. Ups and downs will be there in business. Hurdles and obstacles would be there. Not a very good name number. '
            ],
            [
                'number' => '102',
                'rulling' => 'JUPITER ',
                'contributting_planet' => ' SUN, ZERO & MOON',
                'for_bussiness' => ' Avoid this number for business as well. ',
                'details' => 'Not a good number name. It would give initial bouts of success followed by failures & struggles later. This number should be avoided. '
            ],
            [
                'number' => '103',
                'rulling' => 'RAHU ',
                'contributting_planet' => ' SUN, ZERO & JUPITER    ',
                'for_bussiness' => ' An average number for business name. ',
                'details' => 'This is a good name number. Can give average results initially but later on, this aspect would get enhanced by way of new sources of income or a complete change in the existing occupational profile. Competition that these people would face will be immense.   '
            ],
            [
                'number' => '104',
                'rulling' => 'MERCURY ',
                'contributting_planet' => ' SUN, ZERO & RAHU',
                'for_bussiness' => ' Not a good number when there is no profit. ',
                'details' => 'Success is guaranteed but will get success in unconventional ways. They will get fame but not money. They will become famous but will not be accompanies by material gain.   '
            ],
            [
                'number' => '105',
                'rulling' => 'VENUS ',
                'contributting_planet' => ' SUN, ZERO & MERCURY    ',
                'for_bussiness' => ' A favorable number for business. ',
                'details' => 'This number can be good for material success. It will give good fortune, wealth, name, fame and good environment to live in. But these people would not be living with their family.   '
            ],
            [
                'number' => '106',
                'rulling' => 'KETU ',
                'contributting_planet' => ' SUN, ZERO & VENUS      ',
                'for_bussiness' => ' Not a good business name number. ',
                'details' => 'They would face mid-life crisis and face a lot of problems. Later years of life would be comfortable for them. They would get into big problems which won’t have an easy solution. '
            ],
            [
                'number' => '107',
                'rulling' => 'SATURN ',
                'contributting_planet' => ' SUN, ZERO & KETU',
                'for_bussiness' => ' Not a good business name number. ',
                'details' => 'This number has the ability to bring in success for the native. These people would face problems with the opposite sex. Even if these people achieve wealth, they won’t be able to enjoy it. They will be far from comfortable life. '
            ],
            [
                'number' => '108',
                'rulling' => 'MARS ',
                'contributting_planet' => ' SUN, ZERO & SATURN     ',
                'for_bussiness' => ' Very good business name number; highly auspicious. ',
                'details' => 'People with this number will continuously strive to make progress in life which would give them wealth. A lucky number to have as far as material endowment is concerned. '
            ]
        ];
        NameNumberTotal::insert($data);
    }
}

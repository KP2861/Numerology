<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CharacterDeatil;

class CharacterDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'letter' => 'A',
                'strengths' => 'Controlling, manipulative, good acting skills, courageous',
                'weaknesses' => 'Egoistic, critical',
                'best_jobs' => 'Actor, politician, manager, teacher, researcher',
                'nature' => 'Dynamic, Ambitious'
            ],
            [
                'letter' => 'B',
                'strengths' => 'Friendly, emotional, sensitive, helpful',
                'weaknesses' => 'Self-absorbed, greedy, feminine features',
                'best_jobs' => 'Housewife, nurse, nanny, customer service',
                'nature' => 'Nurturing, Supportive'
            ],
            [
                'letter' => 'C',
                'strengths' => 'Creative, social skills, extroverted, friendly',
                'weaknesses' => 'Ruthlessness, cruelty, lack of empathy',
                'best_jobs' => 'Marketing, media, arts, creative directing',
                'nature' => 'Artistic, Outgoing'
            ],
            [
                'letter' => 'D',
                'strengths' => 'Energetic, positive, focused, persistent, balanced',
                'weaknesses' => 'Working too much, stubbornness',
                'best_jobs' => 'Salesman, businessman, entrepreneur, advisor, finance',
                'nature' => 'Driven, Persistent'
            ],
            [
                'letter' => 'E',
                'strengths' => 'Freedom-loving, independent, intelligent, friendly, sensual, emotional',
                'weaknesses' => 'Unreliable, unfaithful',
                'best_jobs' => 'Photographer, journalist, writer, traveler, explorer',
                'nature' => 'Free-spirited, Curious'
            ],
            [
                'letter' => 'F',
                'strengths' => 'Deep and warm emotions, compassionate, friendly, easy-going, responsible',
                'weaknesses' => 'Self-pity, nosiness',
                'best_jobs' => 'Planning roles, counseling, caregiving',
                'nature' => 'Empathetic, Responsible'
            ],
            [
                'letter' => 'G',
                'strengths' => 'Authoritative, energetic, intellectual, responsible, systematic, creative, intuitive',
                'weaknesses' => 'Loners, stressed, stubborn, doesn’t listen to others',
                'best_jobs' => 'Teacher, professor, writer, managing roles',
                'nature' => 'Intellectual, Systematic'
            ],
            [
                'letter' => 'H',
                'strengths' => 'Great in business, creativity, wealth creation, nature-loving personality',
                'weaknesses' => 'Self-absorbed, greedy, prefers solitude',
                'best_jobs' => 'Nature-related jobs, creative roles',
                'nature' => 'Nature-loving, Creative'
            ],
            [
                'letter' => 'I',
                'strengths' => 'Artistic, creative, deep emotions, compassionate, good judgment, sensitive',
                'weaknesses' => 'Anxiety issues, moody, impulsive',
                'best_jobs' => 'Fashion industry, design, styling, painting, photography',
                'nature' => 'Artistic, Sensitive'
            ],
            [
                'letter' => 'J',
                'strengths' => 'Courageous, bold, control, leadership skills, authoritative, energetic',
                'weaknesses' => 'Lazy without direction',
                'best_jobs' => 'Leadership roles, managerial positions',
                'nature' => 'Bold, Assertive'
            ],
            [
                'letter' => 'K',
                'strengths' => 'Strong will, high energy, influential, spiritual, emotional, instinctive, artistic',
                'weaknesses' => 'Boredom, anxiety, dissatisfaction',
                'best_jobs' => 'Spiritual leaders, psychologists, athletes, artists',
                'nature' => 'Spiritual, Dynamic'
            ],
            [
                'letter' => 'L',
                'strengths' => 'Security, reliability, focused, strong willpower, authoritative, charitable, tolerant',
                'weaknesses' => 'Stubbornness, overthinking, anxiety',
                'best_jobs' => 'Government jobs, law, jurisdiction-related fields',
                'nature' => 'Reliable, Focused'
            ],
            [
                'letter' => 'M',
                'strengths' => 'Productive, stable, reliable, spiritual, courageous, self-confident, energetic, health-conscious',
                'weaknesses' => 'Workaholic tendencies, impatience',
                'best_jobs' => 'Agricultural, industrial, office work, truck driving',
                'nature' => 'Practical, Energetic'
            ],
            [
                'letter' => 'N',
                'strengths' => 'Creative, original, strong will, opinions, systematic, good communication, imaginative',
                'weaknesses' => 'Greedy, jealous, fickle',
                'best_jobs' => 'Creative fields, communication, innovation roles',
                'nature' => 'Creative, Independent'
            ],
            [
                'letter' => 'O',
                'strengths' => 'Selfless, responsible, good acting skills, gracious, dignified, sensitive',
                'weaknesses' => 'Drama queen tendencies, suspicious',
                'best_jobs' => 'Acting, politics, law-related jobs',
                'nature' => 'Altruistic, Diplomatic'
            ],
            [
                'letter' => 'P',
                'strengths' => 'Highly spiritual, thoughtful, intelligent, leadership skills, influential, expressive',
                'weaknesses' => 'Distant, impatient, self-absorbed, eccentric',
                'best_jobs' => 'Entrepreneurship, sales, management, research, teaching',
                'nature' => 'Intellectual, Reflective'
            ],
            [
                'letter' => 'Q',
                'strengths' => 'Unique, original, intense, genius, leadership',
                'weaknesses' => 'Self-absorbed, boring',
                'best_jobs' => 'Creative roles like movie director, writer, designer',
                'nature' => 'Innovative, Intense'
            ],
            [
                'letter' => 'R',
                'strengths' => 'Introverted, energetic, good natured, magnetic personality, successful',
                'weaknesses' => 'Impulsive, short-tempered',
                'best_jobs' => 'Workforce roles, finance, compassionate careers',
                'nature' => 'Introverted, Magnetic'
            ],
            [
                'letter' => 'S',
                'strengths' => 'Intense, emotional, magnetic, money-making qualities, courageous, bold, intelligent, charming',
                'weaknesses' => 'Impulsive, low concern for others',
                'best_jobs' => 'Teaching, researching, writing, exploring, politics',
                'nature' => 'Intense, Charismatic'
            ],
            [
                'letter' => 'T',
                'strengths' => 'High energy, restless, spiritual, emotional, active, determined',
                'weaknesses' => 'Easily influenced, over-emotional, indecisive, aggressive',
                'best_jobs' => 'Sports, marketing, media professions',
                'nature' => 'Energetic, Restless'
            ],
            [
                'letter' => 'U',
                'strengths' => 'Clever, collector, freedom-loving, good social reputation',
                'weaknesses' => 'Indecisive, greedy, selfish',
                'best_jobs' => 'Social roles, creative fields, leadership',
                'nature' => 'Clever, Social'
            ],
            [
                'letter' => 'V',
                'strengths' => 'Focused, efficient, tireless, reliable, honest',
                'weaknesses' => 'Unpredictable, hard-nosed',
                'best_jobs' => 'Detail-oriented jobs, management',
                'nature' => 'Efficient, Reliable'
            ],
            [
                'letter' => 'W',
                'strengths' => 'Sociable, mysterious, imaginative, attractive, charming, self-expressive',
                'weaknesses' => 'Risk-taking tendencies',
                'best_jobs' => 'Creative and social roles',
                'nature' => 'Sociable, Mysterious'
            ],
            [
                'letter' => 'X',
                'strengths' => 'Pleasure-seeking, loves comfort, unrestrained, sensual',
                'weaknesses' => 'Promiscuous',
                'best_jobs' => 'Leisure and entertainment sectors',
                'nature' => 'Sensual, Comfort-seeking'
            ],
            [
                'letter' => 'Y',
                'strengths' => 'Enterprising, pioneering, independent, aesthetic, intellectual',
                'weaknesses' => 'Indecisive',
                'best_jobs' => 'Innovative and independent roles',
                'nature' => 'Pioneering, Intellectual'
            ],
            [
                'letter' => 'Z',
                'strengths' => 'Trusting, peacemaker, builder, compassionate, diplomatic, practical',
                'weaknesses' => 'Determined, tends to act independently without help',
                'best_jobs' => 'Diplomatic roles, practical and supportive careers',
                'nature' => 'Diplomatic, Practical'
            ]
        ];

        CharacterDeatil::insert($data);

    }
}

<?php

namespace Database\Seeders;

use App\Models\AreaOfStruggle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AreaOfStrugle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                'problem' => 'Health',
                'affirmation' => 'I am healthy and full of energy. Healthy, vibrant energy flows through my body naturally. I easily attract good and positive energy to mind, body, and soul. The Universe helps me achieve beautiful levels of health and wellness. I enjoy existing in a natural state of wellbeing. I welcome positive and healthy energy with open arms. Every day is an opportunity to enjoy new levels of energy and well being. I choose to let my natural, glorious, and healthy energy shine. It comes naturally for me to feel good and healthy. I am a magnet for healthy, uplifting, and empowering energy.',
                'wallpaper' => 'app/public/uploads/advanceMobileNumerology/one.png',
                'rudraksh' => '',
                'direction_to_work' => ''

            ],
            [
                'problem' => 'Relationship',
                'affirmation' => 'I deserve real and authentic love. I know what I want. I communicate my needs. I respect myself, therefore others respect me. I am a great catch. I feel the presence of my soulmate is near. I am building authentic connections. I date confidently, knowing that the universe has my back. The right person will see me for who I am. I am lovable. I welcome love into my life.My partner loves me and accepts me.I am grateful for my partner.I am enough for my partner as I am.I am unique, interesting, and intelligent. My partner is lucky to have me I am lucky to have my partner.My partner and I have fun together I am in a committed, loving relationship.I feel passionately in love.I am inspired to be the best partner.I am confident in my relationship. My relationship is worth the effort.It is easy for me to love my partner.Love is my priority.I am at peace, knowing love comes naturally to me.',
                'wallpaper' => 'app/public/uploads/advanceMobileNumerology/two.png',
                'rudraksh' => '',
                'direction_to_work' => ''
            ],
            [
                'problem' => 'Career',
                'affirmation' => 'There are so many great career opportunities. Available for me. I am perfectly qualified for my dream job. I am confident in my worth, skills, and knowledge. I deserve to work at an amazing company that values me. My voice and ideas are appreciated at my workplace. I have unique gifts and talents that are an asset to my career. I attract amazing clients and customers who love my work People love to pay me generously for being myself.',
                'wallpaper' => 'app/public/uploads/advanceMobileNumerology/three.png',
                'rudraksh' => '',
                'direction_to_work' => ''
            ],
            [
                'problem' => 'Money',
                'affirmation' => 'I experience wealth as a key part of my life. I am capable of overcoming any money-obstacles that stand in my way.I can conquer my money goals.Today I commit to living my financial dreams. It\'s easy and natural for me to be prosperous and successful. My life is filled with health and wealth. I have more than enough money. I deserve to make more money. I am always discovering new sources of income. Money comes my way in both expected and unexpected ways. I am open to receiving all wealth life brings to me.',
                'wallpaper' => 'app/public/uploads/advanceMobileNumerology/four.png',
                'rudraksh' => '',
                'direction_to_work' => ''
            ],
            [
                'problem' => 'Job',
                'affirmation' => 'I am excited that every action I take moves me towards my perfect career. I am actively pursuing all job opportunities that have potential for me. I am actively seeking the perfect career for my talents and skills. I am completely energized to find my ideal work. I am completely open to receiving new career opportunities. I am now attracting the perfect career for my talents. I am now taking my career to the next level. I am thankful for the perfect job that is now part of my life. I am the perfect person for the job. I am thrilled to have found the perfect job for me',
                'wallpaper' => 'app/public/uploads/advanceMobileNumerology/five.png',
                'rudraksh' => '',
                'direction_to_work' => ''
            ]
        ];
                AreaOfStruggle::insert($data);
    }
}

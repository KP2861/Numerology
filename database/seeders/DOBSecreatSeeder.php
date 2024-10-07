<?php

namespace Database\Seeders;

use App\Models\DOBsecret;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DOBSecreatSeeder extends Seeder
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
                'details' => 'You are very confident and always possess leadership quality. You don’t want to compromise and you are little egoistic as well. You are short tempered and stubborn in nature.'
            ],
            [
                'number' => '2',
                'details' => 'You are very sentimental in nature. You need some extra push to finish the task. You are Creative and soft spoken person. Your Aura is attractive and you love Arts, Music, Photography and Beauty. You continuously need motivation.'
            ],
            [
                'number' => '3',
                'details' => 'You are a disciplined, knowledgeable, spiritual and very much attached to Kith & Kin and Parents. You are very obedient and while dealing you do it very fairly. Your wisdom and wittiness is always getting noticed.'
            ],
            [
                'number' => '4',
                'details' => 'You are research minded, technical in nature and practical. You often feel mood swing. Sometimes you become illogical and do useless travel. You can not sit at one place for longer time. Number 4 creates illusion and also gives problem in relationship. You also end up with useless and unnecessary expenditure.'
            ],
            [
                'number' => '5',
                'details' => 'is appearing more than once:- Since your number 5 appears more than one, you may get cheated from others or you may cheat others. You may have anxiety and may take drugs. You love mathematics and gives importance to money. Sometimes for money you keep relationship and sometimes due to money your relationship faces issues. You are very calculative and very straight while speaking. You can tell the truth on face of any one. You think more from your mind rather than heart. You are lacking in emotion and always looking for self-profit.'
            ],
            [
                'number' => '6',
                'details' => 'You are Creative and a food lover. You give importance to Brand and attract luxury. You usually have big friend circle and attract opposite sex. You are emotional in nature and always wants & ready to help others. It has been observed that while talking you speak some bad words accidentally.'
            ],
            [
                'number' => '7',
                'details' => 'You are spiritual in nature and you usually do long travel. You are lucky and need reasoning for everything. You are a deep thinker and research minded. You look for stability and want to continuity in relationship.'
            ],
            [
                'number' => '8',
                'details' => 'You give importance to justice and always need justification as well. Your life is full of struggle and disappointment. You often feels tasks are getting delay and sometimes you also feel you are unlucky. You are deep thinker and sometimes extremely happy or extremely sad. You are emotional, Ambitious, attractive, egoistic and you don’t forget the things very easily. You can not see tears in others eye and you are very hard working.'
            ],
            [
                'number' => '9',
                'details' => 'You are very attractive and have high energy level. You are Bold, aggressive, argumentative and stubborn in nature. You always wants to contribute in society and real humanitarian in nature.'
            ]
        ];
        DOBsecret::insert($data);
    }
}

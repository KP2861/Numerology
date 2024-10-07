<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleCountDOBLessDtl extends Model
{
    use HasFactory;

    protected $fillable = [
        'your_unique_number',
        'occurrence',
        'discover_your_nature',
        'your_key_characteristics',
        'your_emotional_insights',
        'your_behavior_insights',
        'balance_through_vastu_and_numerology',
        'focus_area_to_balance',
        'why_this_direction_works_and_potential_challenges',
    ];
}

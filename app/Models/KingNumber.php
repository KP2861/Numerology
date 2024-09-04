<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KingNumber extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'numerology_type',
        'number',
        'lucky_dates',
        'date_to_avoid',
        'direction',
        'lucky_colour',
        'details',
        'default'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KingQueen extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'numerology_type',
        'conductor',
        'profession_will_suits',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordAndCombination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_sound',
        'energy_type',
        'life_challenges_or_success',
        'meaning',

    ];
}

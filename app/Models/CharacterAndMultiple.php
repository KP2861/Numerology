<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAndMultiple extends Model
{
    use HasFactory;

    protected $fillable = [
        'alphabet',
        'personal_traits',
        'multiple_occurrences',
        'power_remedies'
    ];
}

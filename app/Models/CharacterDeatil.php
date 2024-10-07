<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterDeatil extends Model
{
    use HasFactory;
    protected $fillable = [
        'letter',
        'strengths',
        'Weaknesses',
        'best_jobs',
        'nature'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dasha extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'your_personalized_planetary_insights',
    ];
}

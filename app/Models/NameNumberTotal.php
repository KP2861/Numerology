<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameNumberTotal extends Model
{
    use HasFactory;
    protected $table = 'name_numerology_totals';

    protected $fillable = [
        'number',
        'rulling_planet',
        'contributting_planet',
        'for_bussiness',
        'details'
    ];
}

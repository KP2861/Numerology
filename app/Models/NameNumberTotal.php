<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameNumberTotal extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'rulling',
        'contributting_planet',
        'for_bussiness',
        'details'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dasha extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'planet',
        'details'
    ];
}

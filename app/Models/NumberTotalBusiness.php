<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberTotalBusiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numerology_type',
        'details',
        'total',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'unique_characteristic',
        'personalized_insights'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearDatePredition extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numerology_type',
        'dasha',
        'predictions'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiCount extends Model
{
    use HasFactory;
    protected $table = 'mobile_multiple_count';

    protected $fillable = [
        'user_id',
        'numerology_type',
        'number_type',
        'detail',

    ];
}

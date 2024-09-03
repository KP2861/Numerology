<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameNumerology extends Model
{
    use HasFactory;
    protected $table = 'name_numerology';
    protected $fillable = [
        'numerology_type',
        'user_id',
        'first_name',
        'last_name',
        'user_id',
        'dob',
        'gender'
    ];

}

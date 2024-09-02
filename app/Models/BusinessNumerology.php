<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessNumerology extends Model
{
    use HasFactory;
    protected $table = 'business_numerology';
    protected $fillable = [
        'user_id',
        'numerology_type',
        'first_name',
        'last_name',
        'dob',
        'phone_number',
        'type_of_business',
    ];

}

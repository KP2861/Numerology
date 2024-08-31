<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessNumerology extends Model
{
    use HasFactory;
    protected $table = 'business_numerology';
    protected $fillable = [
        'numerology_type',
        'user_id',
        'first_name',
        'last_name',
        'dob',
        'phone_number',
        'business_name',
        'type_of_business',
        'have_partner',
    ];
}

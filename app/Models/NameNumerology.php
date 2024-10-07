<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameNumerology extends Model
{
    use HasFactory;
    protected $table = 'name_numerology';
    protected $fillable = [
        'user_id',
        'numerology_type',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'payment_status',
        'payment_id',
        'town_city',
        'email',
        'time',
        'language',
        'phone_number'
    ];
}

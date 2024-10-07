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
        'business_name',
        'type_of_business',
        'have_partner',
        'payment_id',
        'payment_status',
        'payment',
        'town_city',
        'email',
        'time',
        'language',
        'gender',

    ];

    // BusinessNumerology.php
    public function partners()
    {
        return $this->hasMany(BusinessPartner::class, 'business_id');
    }
}

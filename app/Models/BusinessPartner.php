<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory;
    protected $table = 'business_partner';
    protected $fillable = [
        'business_id',
        'first_name',
        'last_name',
        'dob',
        'phone_number',
        'email',
        'time',
        'town_city',
        'gender',
    ];

    // BusinessPartner.php
    public function businessNumerology()
    {
        return $this->belongsTo(BusinessNumerology::class, 'business_id');
    }
}

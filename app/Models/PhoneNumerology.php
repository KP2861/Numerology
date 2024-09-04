<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumerology extends Model
{
    use HasFactory;
    protected $table = 'phone_numerology';
    protected $fillable = [
        'user_id',
        'numerology_type',
        'user_id',
        'phone_number',
        'dob',
        'area_of_concern',
        'payment_id',
        'payment_status',
    ];
}

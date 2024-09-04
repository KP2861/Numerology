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
    ];
}

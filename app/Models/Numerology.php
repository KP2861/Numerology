<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numerology extends Model
{
    use HasFactory;

    protected $table = 'numerology';
    protected $fillable = [
        'name',
        'numerology_type',
        'packages_amount',
        'expiry_day',
    ];
}

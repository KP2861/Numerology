<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PhoneNumerology extends Model
{
    use HasFactory;

    protected $table = 'phone_numerology';

    protected $fillable = [
        'user_id',
        'numerology_type',
        'phone_number',
        'dob',
        'area_of_concern',
        'payment_id',
        'payment_status',
    ];

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumerology extends Model
{
    use HasFactory;
    protected $table = 'phone_numerology';
    protected $fillable = [
        'numerology_type',
        'phone_number',
        'dob',
        'area_of_concern',
    ];
    public function numerology()
{
    return $this->belongsTo(Numerology::class, 'numerology_type');
}
}

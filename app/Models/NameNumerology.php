<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameNumerology extends Model
{
    use HasFactory;
    protected $table = 'name_numerology';
    protected $fillable = [
        'numerology_type',
        'user_id',
        'first_name',
        'last_name',
        'dob',
        'gender'
    ];

    public function numerology()
    {
        return $this->belongsTo(Numerology::class, 'numerology_type');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numerology extends Model
{
    use HasFactory;

    protected $table = 'numerology';
    protected $fillable = ['name', 'type'];

    // Define the relationship: Each Numerology belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

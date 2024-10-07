<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissingNumberAndRemedies extends Model
{
    use HasFactory;

    protected $fillable = [
        'your_unique_traits',
        'challanges_you_might_face',
        'empowering_remedies_for_you'
    ];
}

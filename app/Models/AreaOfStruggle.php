<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfStruggle extends Model
{
    use HasFactory;
    protected $fillable = [
        'problem',
        'affirmation',
        'wallpaper',
        'rudraksh',
        'direction_to_work',

    ];
}

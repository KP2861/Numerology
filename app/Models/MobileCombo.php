<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileCombo extends Model
{
    use HasFactory;

    protected $fillable = [
        'digit',
        'type',
        'message'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordAndCombination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'issues_faced_in_life',
        'details',

    ];
}

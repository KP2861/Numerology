<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiAlphabetOccurance extends Model
{
    use HasFactory;
    protected $fillable = [
        'alphabet',
        'details',
        'if_multiple_occurrence_issues_in_life',
        'remedies',

    ];
}

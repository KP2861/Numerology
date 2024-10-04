<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrystalDetails extends Model
{
    use HasFactory;
    protected $table = 'crystal_details';

    protected $fillable = [
        'date',
        'crystal',
        'details'
    ];
}

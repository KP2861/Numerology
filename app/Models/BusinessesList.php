<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessesList extends Model
{
    use HasFactory;
    protected $table = 'businesses_list';

    protected $fillable = [
        'bussiness_name',
        'number',
    ];
}

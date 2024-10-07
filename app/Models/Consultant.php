<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $table = 'consultant';


    protected $fillable = [
        'user_id',
        'name',
        'email',
        'gender',
        'dob',
        'occupation',
        'phone',
        'message'
    ];
}

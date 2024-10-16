<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfTemplate extends Model
{
    use HasFactory;
    protected $table = 'pdf_templates';

    protected $fillable = [
        'header_name',
        'footer_name',
        'header_img',
        'footer_img',
    ];
}

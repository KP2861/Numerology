<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category_id', 'description', 'file	'];

    // Define the relationship with the ArticlesCategory model
    public function category()
    {
        return $this->belongsTo(ArticlesCategory::class, 'category_id');
    }
}

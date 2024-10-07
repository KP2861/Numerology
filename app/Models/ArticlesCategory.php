<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesCategory extends Model
{
    protected $table = 'articles_categories';
    use HasFactory;
    protected $fillable = ['name'];

    // Define relationship with the Article model
    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}

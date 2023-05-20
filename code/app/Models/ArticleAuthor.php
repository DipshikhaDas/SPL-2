<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleAuthor extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'url',
        'affiliation',
        'bio_statement',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    
}
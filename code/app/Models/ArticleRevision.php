<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRevision extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'file_without_author_info',
        'author_comments',
        
    ];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

 
}
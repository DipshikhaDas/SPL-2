<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'file_with_author_info',
        'file_without_author_info',
        'author_comments',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
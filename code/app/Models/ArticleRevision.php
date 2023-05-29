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
        'editor_comments',
        'revision_status',
        'reply_letter',
        
    ];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function reviewFeedbacks()
    {
        return $this->hasMany(ArticleReview::class,'revised_article_id');
    }
 
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'revised_article_id',
        'reviewer_id',
        'status',
        'review',
    ];

    public function revisedArticle()
    {
        return $this->belongsTo(ArticleRevision::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class);
    }
}

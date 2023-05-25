<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedArticleAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'published_article_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'url',
    ];

    public function article(){
        $this->belongsTo(PublishedArticle::class);
    }
}

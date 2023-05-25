<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_id',
        'title',
        'abstract',
        'reference',
        'publication_date',
        'doi',
        'cover_photo',
        'published_article_file',
    ];

    public function authors(){
        return $this->hasMany(PublishedArticleAuthor::class);
    }

    public function keywords(){
        return $this->belongsToMany(Keyword::class);
    }
}

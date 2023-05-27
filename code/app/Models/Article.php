<?php

namespace App\Models;

use App\Models\Keyword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_id',
        'title',
        'abstract',
        'keywords',
        'status',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function correspondingAuthors()
    {
        return $this->belongsToMany(User::class);
    }

    public function revisions()
    {
        return $this->hasMany(ArticleRevision::class);
    }

    public function authors()
    {
        return $this->hasMany(ArticleAuthor::class);
    }

    public function additionalFiles()
    {
        return $this->hasMany(ArticleAdditionalFile::class);
    }

    public function links()
    {
        return $this->hasMany(ArticleLink::class);
    }
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }

    public function editors()
    {
        return $this->belongsToMany(User::class, 'article_editor','article_id');
    }

    public function consideredReviewers()
    {
        return $this->belongsToMany(User::class, 'considered_reviewers', 'article_id','reviewer_id')->withTimestamps();
    }
}
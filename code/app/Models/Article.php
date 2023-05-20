<?php

namespace App\Models;

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

    public function submissions()
    {
        return $this->hasMany(ArticleSubmission::class);
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
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleAdditionalFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'additional_file_name',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
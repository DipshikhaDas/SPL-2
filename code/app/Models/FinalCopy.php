<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalCopy extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'file',
        'reference',
    ];

    public function mainArticle()
    {
        $this->belongsTo(Article::class,'article_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ArticleAuthor extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'article_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'url',
        'affiliation',
        'bio_statement',
        'is_corresponding',
    ];

    protected $casts = [
        'is_corresponding' => 'boolean',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'aims_and_scope',
        'author_guideline',
        'editorial_board',
        'editor_id',
        'deadline_date',
        'cover_photo',
        'faculty_id',
        'accepting_articles',
    ];

    protected $casts = [
        'accepting_articles' => 'boolean',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function editor(){
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function volumes(){
        return $this->hasMany(JournalVolume::class);
    }
}
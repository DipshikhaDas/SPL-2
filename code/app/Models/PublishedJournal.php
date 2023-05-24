<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedJournal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'volume_no',
        'issue_no',
        'isbn',
        'cover_photo',
        'faculty_id',
        'file',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}

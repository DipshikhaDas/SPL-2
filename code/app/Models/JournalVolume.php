<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalVolume extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_id',
        'start',
        'end',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }

    public function issues()
    {
        return $this->hasMany(JournalVolumeIssue::class, 'volume_id');
    }
}

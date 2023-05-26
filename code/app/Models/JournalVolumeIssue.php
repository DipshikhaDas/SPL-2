<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalVolumeIssue extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'volume_id',
        'publication_date',
    ];

    public function volume()
    {
        return $this->belongsTo(JournalVolume::class, 'volume_id');
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function faculties()
    {
        return $this->belongsToMany(Faculty::class);
    }

    public function submittedArticles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function editJournal()
    {
        return $this->hasMany(Journal::class, 'editor_id');
    }

    public function editedArticles()
    {
        return $this->belongsToMany(Article::class, 'article_editor','editor_id');
    }

    public function reviews()
    {
        return $this->belongsToMany(Article::class, 'considered_reviewers', 'reviewer_id', 'article_id')->withPivot('status')->withTimestamps();
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'pp_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // app/Models/User.php

    public function bookmarkedComics()
    {
        return $this->belongsToMany(
            Comics::class,
            'bookmarks',
            'user_id',
            'comic_id'
        )->withTimestamps();
    }

    public function subscriptions():HasOne{
        return $this->hasOne(Subscriptions::class, 'user_id');
    }

    public function readingHistories():HasMany {
        return $this->hasMany(ReadingHistory::class);
    }

    public function creator():HasMany {
        return $this->hasMany(Comics::class, 'creator_id');
    }
}

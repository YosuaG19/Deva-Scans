<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Comics extends Model
{
    use HasFactory;
    protected $table = "comics";

    protected $casts = [
        'last_chapter_at' => 'datetime',
    ];

    protected $fillable = [
        'title',
        'slug',
        'desc',
        'cover_path',
        'author',
        'artist',
        'type_id',
        'status_id'
    ];

    public function type(): BelongsTo{
        return $this->belongsTo(Types::class, 'type_id');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function chapters():HasMany{
        return $this->hasMany(Chapters::class, 'comic_id')->orderBy('numbering', 'desc');
    }

    public function latestChapter(){
        return $this->hasOne(Chapters::class, 'comic_id')
                    ->latestOfMany('created_at');
    }

    public function bookmarks():HasMany{
        return $this->hasMany(Bookmarks::class, 'comic_id');
    }

    public function comments():MorphMany{
        return $this->morphMany(comments::class, 'commentable')->latest();
    }
    
    public function reactions():MorphMany{
        return $this->morphMany(Reactions::class, 'reactionable');
    }

    public function ratings():HasMany{
        return $this->hasMany(Ratings::class, 'comic_id');
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(
            Genres::class,
            'comic_genres',
            'comic_id',
            'genre_id'
        );
    }
}

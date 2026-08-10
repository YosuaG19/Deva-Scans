<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Chapters extends Model
{
    use HasFactory;
    protected $table = 'chapters';

    protected $fillable = [
        'comic_id',
        'numbering',
        'title'
    ];

    public function comic():BelongsTo{
        return $this->belongsTo(Comics::class, 'comic_id');
    }

    public function panels():HasMany{
        return $this->hasMany(Panels::class, 'chapter_id');
    }

    public function comments():MorphMany{
        return $this->morphMany(comments::class, 'commentable');
    }

    public function reactions():MorphMany{
        return $this->morphMany(Reactions::class, 'reactionable');
    }
}

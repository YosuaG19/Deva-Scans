<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genres extends Model
{
    protected $table = 'genres';

    protected $fillable = ['name'];

    public function comics(): BelongsToMany
    {
        return $this->belongsToMany(
            Comics::class,
            'comic_genres',
            'genre_id',
            'comic_id'
        );
    }
}

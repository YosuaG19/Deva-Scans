<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReadingHistory extends Model
{
    protected $table = 'readingHistory';

    protected $fillable = [
        'user_id',
        'comic_id',
        'chapter_id',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comic():BelongsTo{
        return $this->belongsTo(Comics::class, 'comic_id');
    }

    public function chapter():BelongsTo{
        return $this->belongsTo(Chapters::class, 'chapter_id');
    }
}

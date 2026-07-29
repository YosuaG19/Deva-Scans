<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingHistory extends Model
{
    protected $table = 'readingHistory';

    protected $fillable = [
        'user_id',
        'comic_id',
        'chapter_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comic()
    {
        return $this->belongsTo(Comics::class);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapters::class);
    }
}

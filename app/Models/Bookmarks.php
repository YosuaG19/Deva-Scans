<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bookmarks extends Model
{
    use HasFactory;
    protected $table = 'bookmarks';

    protected $fillable = [
        'comic_id',
        'user_id'
    ];

    public function comic():BelongsTo{
        return $this->belongsTo(Comics::class, 'comic_id');
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}

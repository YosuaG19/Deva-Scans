<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
    ];
    
    public function reactionable(){
        return $this->morphTo();
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}

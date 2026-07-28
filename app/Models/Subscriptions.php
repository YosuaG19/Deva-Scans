<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscriptions extends Model
{
    protected $table = 'subscriptions';

    protected $fillable = ['user_id'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}

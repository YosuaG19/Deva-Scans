<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = ['name'];

    public function comic():HasMany{
        return $this->hasMany(Comics::class);
    }
}

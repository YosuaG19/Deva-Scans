<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Types extends Model
{
    protected $table = 'types';

    protected $fillable = ['name'];

    public function comic():HasMany{
        return $this->hasMany(Comics::class, 'comic_id');
    }
}

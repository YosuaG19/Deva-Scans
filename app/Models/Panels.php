<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Panels extends Model
{
    use HasFactory;
    protected $table = 'panels';

    protected $fillable = [
        'chapter_id',
        'page_number',
        'img_path'
    ];

    public function chapter():BelongsTo{
        return $this->belongsTo(Chapters::class, 'chapter_id');
    }
}

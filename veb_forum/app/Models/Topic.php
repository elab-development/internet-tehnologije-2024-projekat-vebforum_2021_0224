<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{

    protected $guarded = [];

    public function board(): BelongsTo {
        return $this->belongsTo(Board::class, "board_id");
    }

    public function posts(): HasMany {
        return $this->belongsTo(Post::class);
    }
}

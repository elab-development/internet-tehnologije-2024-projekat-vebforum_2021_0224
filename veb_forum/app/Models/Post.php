<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $guarded = [];

    public function topic(): BelongsTo {
        return $this->belongsTo(Topic::class, "topic_id");
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }

    public function replies(): HasMany {
        return $this->hasMany(Comment::class);
    }
}

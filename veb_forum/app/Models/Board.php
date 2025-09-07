<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Board extends Model
{
    public function topics(): HasMany {
        return $this->hasMany(Topic::class); // dodaj ->chaperone() da bi teme imale reference na tablu
    }
}

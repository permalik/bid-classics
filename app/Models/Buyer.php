<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Buyer extends Model
{
    use HasFactory;

    public function username(): BelongsTo
    {
        return $this->belongsTo(Username::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function sales(): BelongsToMany
    {
        return $this->belongsToMany(Sale::class);
    }
}

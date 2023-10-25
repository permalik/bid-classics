<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class State extends Model
{
    use HasFactory;

    public function buyer(): HasMany
    {
        return $this->hasMany(Buyer::class);
    }

    public function seller(): HasOne
    {
        return $this->hasOne(Seller::class);
    }
}

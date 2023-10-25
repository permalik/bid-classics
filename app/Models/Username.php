<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Username extends Model
{
    use HasFactory;

    public function buyer(): HasOne
    {
        return $this->hasOne(Buyer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vin extends Model
{
    use HasFactory;

    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }
}

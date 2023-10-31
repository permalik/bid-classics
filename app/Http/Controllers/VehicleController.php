<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Inertia\Inertia;

class VehicleController extends Controller
{
    public function oneVehicle(Vehicle $vehicle)
    {
        return Inertia::render('Vehicle', [
            'id' => $vehicle->id,
            'vin' => $vehicle->vin->identifier,
            'year' => $vehicle->year->name,
            'make' => $vehicle->make->name,
            'classic' => $vehicle->classic->name,
            'condition' => $vehicle->condition->name,
            'price' => $vehicle->price,
            'sellByDate' => $vehicle->sell_by_date,
            'mileage' => $vehicle->mileage,
            'image' => $vehicle->image,
        ]);
    }
}

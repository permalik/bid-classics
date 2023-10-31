<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Inertia\Inertia;

class VehiclesController extends Controller
{
    public function allVehicles()
    {
        $vehicles = Vehicle::with('year', 'make', 'classic')->get();

        $prunedVehicles = [];

        foreach ($vehicles as $vehicle) {
            if (!$vehicle->is_sold) {
                array_push($prunedVehicles, $vehicle);
            }
        }

        return Inertia::render('Vehicles', [
            'vehicles' => $prunedVehicles,
        ]);
    }
}

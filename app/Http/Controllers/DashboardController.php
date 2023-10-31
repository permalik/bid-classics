<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Inertia\Inertia;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $vehicles = Vehicle::with('year', 'make', 'classic')->get();
        $currentUserId = Auth::id();
        $prunedVehicles = [];

        foreach ($vehicles as $vehicle) {
            if ($vehicle->is_sold && $vehicle->user_id == $currentUserId) {
                array_push($prunedVehicles, $vehicle);
            }
        }

        return Inertia::render('Dashboard', [
            'vehicles' => $prunedVehicles
        ]);
    }
}

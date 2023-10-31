<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Auth;

class PurchaseController extends Controller
{
    public function purchase(Vehicle $vehicle)
    {
        $current_vehicle = Vehicle::find($vehicle->id);
        $user_id = Auth::id();

        $current_vehicle->user_id = $user_id;
        $current_vehicle->is_sold = true;

        $current_vehicle->save();

        return redirect('/dashboard');
    }
}

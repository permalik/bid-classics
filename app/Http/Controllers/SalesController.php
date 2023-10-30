<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Inertia\Inertia;

class SalesController extends Controller
{
    public function allSales()
    {
        $sales = Sale::
        with(
            'vehicle.year',
            'vehicle.make',
            'vehicle.classic',
        )->get();

        $years = [];
        $makes = [];
        $classics = [];
        $askingPrices = [];
        $vehicleIds = [];
//
//        foreach ($sales as $sale) {
//            array_push($years, $sale->vehicle->year->name);
//        }
//        foreach ($sales as $sale) {
//            array_push($makes, $sale->vehicle->make->name);
//        }
//        foreach ($sales as $sale) {
//            array_push($classics, $sale->vehicle->classic->name);
//        }
//        foreach ($sales as $sale) {
//            array_push($askingPrices, $sale->asking_price);
//        }
//        foreach ($sales as $sale) {
//            array_push($vehicleIds, $sale->vehicle_id);
//        }

        return Inertia::render('Sales', [
            'sales' => $sales,
//            'years' => $years,
//            'makes' => $makes,
//            'classics' => $classics,
//            'askingPrices' => $askingPrices,
//            'vehicleIds' => $vehicleIds,
        ]);
    }
}

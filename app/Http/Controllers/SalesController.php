<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Inertia\Inertia;

class SalesController extends Controller
{
    public function allSales()
    {
        $sales = Sale::with('vehicle')->get();

        $years = [];
        $makes = [];
        $classics = [];
        $askingPrices = [];

        foreach ($sales as $sale) {
            array_push($years, $sale->vehicle->year->name);
        }
        foreach ($sales as $sale) {
            array_push($makes, $sale->vehicle->make->name);
        }
        foreach ($sales as $sale) {
            array_push($classics, $sale->vehicle->classic->name);
        }
        foreach ($sales as $sale) {
            array_push($askingPrices, $sale->asking_price);
        }

        return Inertia::render('Sales', [
            'years' => $years,
            'makes' => $makes,
            'classics' => $classics,
            'askingPrices' => $askingPrices,
        ]);
    }
}

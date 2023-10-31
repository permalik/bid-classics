<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Vehicle;
use Inertia\Inertia;

class SaleController extends Controller
{
    public function oneSale(Sale $sale)
    {
        return Inertia::render('Sale', [
            'id' => $sale->id,
            'year' => $sale->vehicle->year->name,
            'make' => $sale->vehicle->make->name,
            'classic' => $sale->vehicle->classic->name,
            'mileage' => $sale->vehicle->mileage,
            'vin' => $sale->vehicle->vin->identifier,
            'askingPrice' => $sale->asking_price,
            'sellByDate' => $sale->sell_by_date,
            'image' => $sale->vehicle->image,
            'sellerLastName' => $sale->seller->last_name,
            'sellerFirstName' => $sale->seller->first_name,
        ]);
    }
}

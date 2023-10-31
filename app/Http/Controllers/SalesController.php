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

        $prunedSales = [];

        foreach ($sales as $sale) {
            if (!$sale->is_sold) {
                array_push($prunedSales, $sale);
            }
        }

        return Inertia::render('Sales', [
            'sales' => $prunedSales,
        ]);
    }
}

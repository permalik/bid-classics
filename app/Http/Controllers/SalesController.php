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

        return Inertia::render('Sales', [
            'sales' => $sales,
        ]);
    }
}

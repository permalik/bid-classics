<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SellerController extends Controller
{
    public function seller()
    {
        return Inertia::render('Seller');
    }
}

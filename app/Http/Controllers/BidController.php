<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function bid(Bid $bid)
    {
        echo $bid;
    }
}

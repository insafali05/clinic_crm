<?php

namespace App\Http\Controllers\Frontend\Medicine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sell_historyController extends Controller
{
    public function Index()
    {
        return  view('frontend.medicine.sell_history');
    }
}

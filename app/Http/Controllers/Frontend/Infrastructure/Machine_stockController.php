<?php

namespace App\Http\Controllers\Frontend\Infrastructure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Machine_stockController extends Controller
{
    public function Index()
    {
        return view('frontend.infrastructure.machine_stock');
    }
}

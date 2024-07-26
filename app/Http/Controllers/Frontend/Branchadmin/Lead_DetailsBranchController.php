<?php

namespace App\Http\Controllers\Frontend\Branchadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lead_DetailsBranchController extends Controller
{
    public function Index()
    {
        return view('frontend.branchadmin.lead_details');
    }
}

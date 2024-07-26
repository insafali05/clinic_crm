<?php

namespace App\Http\Controllers\Frontend\Branchadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Add_leadsBranchController extends Controller
{
    public function Index()
    {
        return view('frontend.branchadmin.add_leads');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lead_add_leadsController extends Controller
{

    public function Index()
    {
        return view('frontend.lead.add_leads');
    }
}

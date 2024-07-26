<?php

namespace App\Http\Controllers\Frontend\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Open_leadsController extends Controller
{

    public function Index()
    {
        return view('frontend.lead.open_leads');
    }
}

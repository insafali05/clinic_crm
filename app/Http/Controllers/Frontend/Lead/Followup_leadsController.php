<?php

namespace App\Http\Controllers\Frontend\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Followup_leadsController extends Controller
{

    public function Index()
    {
        return view('frontend.lead.followup_leads');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lead_detailsController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.lead_details');
    }
}

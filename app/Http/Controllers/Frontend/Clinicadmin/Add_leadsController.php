<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Add_leadsController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.add_leads');
    }
}

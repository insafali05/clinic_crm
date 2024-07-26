<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Staff_detailsController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.staff_details');
    }
}

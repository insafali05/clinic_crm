<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Branch_detailsController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.branch_details');
    }
}

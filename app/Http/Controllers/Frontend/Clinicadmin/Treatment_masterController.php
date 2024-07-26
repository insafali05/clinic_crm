<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Treatment_masterController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.treatment_master');
    }
}

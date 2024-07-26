<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Doctor_masterController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.doctor_master');
    }
}

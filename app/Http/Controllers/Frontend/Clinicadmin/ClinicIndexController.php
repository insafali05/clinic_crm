<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClinicIndexController extends Controller
{
    public function index()
    {
        $clinicadmin = Auth::guard('clinicadmin')->user();
        $clinicName = session('clinic_name');
        return view('frontend.clinicadmin.index', ['clinicadmin' => $clinicadmin, 'clinic_name' => $clinicName]);
    }
}

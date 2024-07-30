<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Branch;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;

class Doctor_listController extends Controller
{
    public function index()
    {
        // Fetch the currently logged-in ClinicAdmin
        $clinicAdmin = Auth::guard('clinicadmin')->id();

        // Fetch doctors created by this ClinicAdmin
        $doctors = Doctor::where('clinicadmin_id', $clinicAdmin)->get();

        return view('frontend.clinicadmin.doctors_list', compact('doctors'));
    }
}

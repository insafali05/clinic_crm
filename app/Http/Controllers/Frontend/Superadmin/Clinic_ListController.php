<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClinicAdmin;

class Clinic_ListController extends Controller
{
    public function index()
    {
        $superadmin = Auth::user();
        $clinicAdmins = ClinicAdmin::all(); // Fetch all clinic admins from the database

        return view('frontend.superadmin.clinics_list', [
            'superadmin' => $superadmin,
            'clinicAdmins' => $clinicAdmins
        ]);
    }
}

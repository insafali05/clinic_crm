<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ClinicAdmin;

class Clinic_DetailsController extends Controller
{

    public function index($contact_number)
    {

        $superadmin = Auth::user();
        $clinicAdmin = ClinicAdmin::where('contact_number', $contact_number)->firstOrFail();
        return view('frontend.superadmin.clinic_details', [
            'superadmin' => $superadmin,
            'clinicAdmin' => $clinicAdmin

        ]);
    }
}

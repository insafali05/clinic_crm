<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Models\ClinicAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClinicAdminCredentials;

class ClinicAdminController extends Controller
{
    public function create()
    {
        $superadmin = Auth::user();
        return view('frontend.superadmin.create_clinic_admin', ['superadmin' => $superadmin]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'clinic_name' => 'required|string',
            'number_of_branches' => 'required|integer',
            'contact_number' => 'required|string|unique:clinic_admins,contact_number',
            'alternative_contact_number' => 'nullable|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'payment' => 'required|numeric',
            'payment_date_time' => 'required|date',
            'payment_mode' => 'required|string',
            'license_key' => 'required|string|unique:clinic_admins,license_key',
            'start_date_time' => 'required|date',
            'expiry_date_time' => 'required|date',
            'logo' => 'nullable|file',
        ]);

        // Hash the password
        $data['password'] = Hash::make($data['password']);

        // Handle file upload
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Create the clinic admin
        $clinicAdmin = ClinicAdmin::create($data);

        // Send email to clinic admin
        Mail::to($data['contact_number'])->send(new ClinicAdminCredentials($data['contact_number'], $request->input('password'), $data['license_key']));

        return redirect()->route('clinic-admin.create')->with('success', 'Clinic Admin created successfully and credentials sent to email.');
    }
}

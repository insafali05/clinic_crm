<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Branch;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;

class Add_doctorController extends Controller
{
    public function index()
    {
        $clinicAdminId = Auth::guard('clinicadmin')->id();
        $branches = Branch::where('clinicadmin_id', $clinicAdminId)->get();
        $specializations = Specialization::where('clinicadmin_id', $clinicAdminId)->get();

        return view('frontend.clinicadmin.add_doctor', compact('branches', 'specializations'));
    }

    public function store(Request $request)
    {
        $clinicAdminId = Auth::guard('clinicadmin')->id();

        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'contact_number' => 'required|string|max:15|unique:doctors',
            'email' => 'required|email|max:255|',
            'password' => 'required|string',
            'address' => 'required|string',
            'branch_id' => 'required|exists:branches,id',
            'specialization_id' => 'required|exists:specializations,id',
            'adhar_card' => 'nullable|mimes:jpg,jpeg,png',
            'certificate' => 'nullable|mimes:jpg,jpeg,png',
            'photo' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        $doctor = new Doctor([
            'name' => $request->name,
            'gender' => $request->gender,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'clinicadmin_id' => $clinicAdminId,
            'branch_id' => $request->branch_id,
            'specialization_id' => $request->specialization_id,
        ]);

        if ($request->hasFile('adhar_card')) {
            $doctor->adhar_card = $request->file('adhar_card')->store('adhar_cards', 'public');
        }

        if ($request->hasFile('certificate')) {
            $doctor->certificate = $request->file('certificate')->store('certificates', 'public');
        }

        if ($request->hasFile('photo')) {
            $doctor->photo = $request->file('photo')->store('photos', 'public');
        }

        $doctor->save();

        return redirect()->back()->with('success', 'Doctor added successfully.');
    }
}

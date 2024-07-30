<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\StaffType;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class Add_staffController extends Controller
{
    public function index()
    {
        // Get the currently logged-in ClinicAdmin
        $clinicAdminId = Auth::guard('clinicadmin')->user()->id;
        Log::info("ClinicAdmin ID: " . $clinicAdminId);


        // Fetch branches created by the logged-in ClinicAdmin
        $branches = Branch::where('clinicadmin_id', $clinicAdminId)->get();

        // Fetch staff types created by the logged-in ClinicAdmin
        $staffTypes = StaffType::where('clinicadmin_id', $clinicAdminId)->get();

        return view('frontend.clinicadmin.add_staff', compact('branches', 'staffTypes'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|in:male,female',
                'contact_number' => 'required|string|max:20',
                'contact_number_alternative' => 'nullable|string|max:20',
                'password' => 'required|string',
                'address' => 'required|string|max:255',
                'branch_id' => 'required|exists:branches,id',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'adhar_card' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            ]);

            $clinicAdminId = Auth::guard('clinicadmin')->user()->id;
            Log::info("ClinicAdmin ID used for staff creation: " . $clinicAdminId);
            // Handle file uploads
            $photoPath = $request->file('photo') ? $request->file('photo')->store('staff_photos') : null;
            $adharCardPath = $request->file('adhar_card') ? $request->file('adhar_card')->store('adhar_cards') : null;
            $certificatePath = $request->file('certificate') ? $request->file('certificate')->store('certificates') : null;

            // Create the staff record
            Staff::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'contact_number' => $request->contact_number,
                'contact_number_alternative' => $request->contact_number_alternative,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'branch_id' => $request->branch_id,
                'photo' => $photoPath,
                'adhar_card' => $adharCardPath,
                'certificate' => $certificatePath,
                'clinicadmin_id' => $clinicAdminId,
            ]);
            Log::info("staff added successfully ");
            Log::info("gender " . $request->gender);
            Log::info("branch_id " . $request->branch_id);
            return redirect()->back()->with('success', 'Staff added successfully');
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error adding staff: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'There was an error adding the staff. Please try again.']);
        }
    }
}

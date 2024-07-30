<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;

use App\Models\Branch;
use App\Models\Staff;
use App\Models\StaffType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Create_StaffController extends Controller
{
    public function create()
    {
        $clinicAdminId = Auth::guard('clinicadmin')->id();
        $branches = Branch::where('clinicadmin_id', $clinicAdminId)->get();
        $staffTypes = StaffType::where('clinicadmin_id', $clinicAdminId)->get();

        return view('frontend.clinicadmin.add_staff', compact('branches', 'staffTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'contact_number' => 'required|string|max:255',
            'contact_number_alternative' => 'nullable|string|max:255',
            'password' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'branch_id' => 'required|exists:branches,id',
            'staff_types' => 'nullable|array',
            'photo' => 'nullable|file',
            'adhar_card' => 'nullable|file',
            'certificate' => 'nullable|file',
        ]);

        $clinicAdminId = Auth::guard('clinicadmin')->id();
        $data = $request->all();
        $data['clinicadmin_id'] = $clinicAdminId;
        $data['staff_types'] = json_encode($request->staff_types);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos');
        }
        if ($request->hasFile('adhar_card')) {
            $data['adhar_card'] = $request->file('adhar_card')->store('adhar_cards');
        }
        if ($request->hasFile('certificate')) {
            $data['certificate'] = $request->file('certificate')->store('certificates');
        }

        Staff::create($data);

        return redirect()->back()->with('success', 'Staff added successfully');
    }
}

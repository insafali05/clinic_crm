<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use App\Models\StaffType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Staff_masterController extends Controller
{
    public function index()
    {
        try {
            $user = Auth::guard('clinicadmin')->user();
            $staffTypes = StaffType::where('clinicadmin_id', $user->id)->get();
            return view('frontend.clinicadmin.staff_master', ['staffTypes' => $staffTypes]);
        } catch (\Exception $e) {
            Log::error('Error fetching staff types: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while fetching staff types.']);
        }
    }

    public function store(Request $request)
    {
        $user = Auth::guard('clinicadmin')->user();
        $request->validate([
            'type' => 'required|string',
        ]);

        try {
            StaffType::create([
                'type' => $request->type,
                'clinicadmin_id' => $user->id,
            ]);
            return redirect()->route('clinicadmin.staff_master.index')->with('success', 'Staff type added successfully.');
        } catch (\Exception $e) {
            Log::error('Error storing staff type: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while adding the staff type.']);
        }
    }

    public function update(Request $request, $id)
    {
        $user = Auth::guard('clinicadmin')->user();
        $request->validate([
            'type' => 'required|string',
        ]);

        try {
            $staffType = StaffType::where('id', $id)->where('clinicadmin_id', $user->id)->firstOrFail();
            $staffType->type = $request->type;
            $staffType->save();
            return redirect()->route('clinicadmin.staff_master.index')->with('success', 'Staff type updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating staff type: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the staff type.']);
        }
    }

    public function destroy($id)
    {
        $user = Auth::guard('clinicadmin')->user();

        try {
            $staffType = StaffType::where('id', $id)->where('clinicadmin_id', $user->id)->firstOrFail();
            $staffType->delete();
            return redirect()->route('clinicadmin.staff_master.index')->with('success', 'Staff type deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting staff type: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while deleting the staff type.']);
        }
    }
}

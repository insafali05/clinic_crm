<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SpecializationController extends Controller
{
    public function create()
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'No authenticated user found.']);
        }

        $specializations = Specialization::where('clinicadmin_id', $user->id)->get();

        return view('frontend.clinicadmin.doctor_master', compact('specializations'));
    }

    public function store(Request $request)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            Log::error('No authenticated user found.');
            return redirect()->back()->withErrors(['error' => 'No authenticated user found.']);
        }

        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            Specialization::create([
                'name' => $request->name,
                'clinicadmin_id' => $user->id,
            ]);

            return redirect()->route('specializations.create')->with('success', 'Specialization added successfully.');
        } catch (\Exception $e) {
            Log::error('Error in store method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while adding the specialization.']);
        }
    }

    public function update(Request $request, $id)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'No authenticated user found.']);
        }

        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $specialization = Specialization::find($id);

            if ($specialization->clinicadmin_id !== $user->id) {
                return redirect()->back()->withErrors(['error' => 'You are not authorized to update this specialization.']);
            }

            $specialization->update([
                'name' => $request->name,
            ]);

            return redirect()->route('specializations.create')->with('success', 'Specialization updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error in update method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the specialization.']);
        }
    }

    public function destroy($id)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'No authenticated user found.']);
        }

        try {
            $specialization = Specialization::find($id);

            if ($specialization->clinicadmin_id !== $user->id) {
                return redirect()->back()->withErrors(['error' => 'You are not authorized to delete this specialization.']);
            }

            $specialization->delete();

            return redirect()->route('specializations.create')->with('success', 'Specialization deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error in destroy method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while deleting the specialization.']);
        }
    }
}

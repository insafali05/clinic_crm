<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use App\Models\TreatmentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Treatment_masterController extends Controller
{
    public function index()
    {
        $treatmentTypes = TreatmentType::where('clinicadmin_id', Auth::id())->get();
        return view('frontend.clinicadmin.treatment_master', compact('treatmentTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        TreatmentType::create([
            'type' => $request->input('type'),
            'clinicadmin_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Treatment Type added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        $treatmentType = TreatmentType::findOrFail($id);
        $treatmentType->update([
            'type' => $request->input('type'),
        ]);

        return redirect()->back()->with('success', 'Treatment Type updated successfully');
    }

    public function destroy($id)
    {
        $treatmentType = TreatmentType::findOrFail($id);
        $treatmentType->delete();

        return redirect()->back()->with('success', 'Treatment Type deleted successfully');
    }
}

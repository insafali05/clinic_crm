<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalType;
use Illuminate\Support\Facades\Auth;

class MedicineMasterController extends Controller
{
    public function index()
    {
        $medicalTypes = MedicalType::where('clinicadmin_id', Auth::id())->get();
        return view('frontend.clinicadmin.medicine_master', compact('medicalTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        MedicalType::create([
            'name' => $request->name,
            'clinicadmin_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Medical Type added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $medicalType = MedicalType::findOrFail($id);
        $medicalType->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Medical Type updated successfully.');
    }

    public function destroy($id)
    {
        $medicalType = MedicalType::findOrFail($id);
        $medicalType->delete();

        return redirect()->back()->with('success', 'Medical Type deleted successfully.');
    }
}

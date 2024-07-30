<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use App\Models\LabType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Lab_masterController extends Controller
{
    public function index()
    {
        $labTypes = LabType::where('clinicadmin_id', Auth::id())->get();
        return view('frontend.clinicadmin.lab_master', compact('labTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        LabType::create([
            'type' => $request->input('type'),
            'clinicadmin_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Lab Type added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        $labType = LabType::findOrFail($id);
        $labType->update([
            'type' => $request->input('type'),
        ]);

        return redirect()->back()->with('success', 'Lab Type updated successfully');
    }

    public function destroy($id)
    {
        $labType = LabType::findOrFail($id);
        $labType->delete();

        return redirect()->back()->with('success', 'Lab Type deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfrastructureType;
use Illuminate\Support\Facades\Auth;

class InfrastructureMasterController extends Controller
{
    public function index()
    {
        $infrastructureTypes = InfrastructureType::where('clinicadmin_id', Auth::id())->get();
        return view('frontend.clinicadmin.infrastructure_master', compact('infrastructureTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        InfrastructureType::create([
            'type' => $request->type,
            'clinicadmin_id' => Auth::id(),
        ]);

        return redirect()->route('clinicadmin.infrastructure_master.index')->with('success', 'Infrastructure Type added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);

        $infrastructureType = InfrastructureType::findOrFail($id);
        $infrastructureType->update([
            'type' => $request->type,
        ]);

        return redirect()->route('clinicadmin.infrastructure_master.index')->with('success', 'Infrastructure Type updated successfully');
    }

    public function destroy($id)
    {
        $infrastructureType = InfrastructureType::findOrFail($id);
        $infrastructureType->delete();

        return redirect()->route('clinicadmin.infrastructure_master.index')->with('success', 'Infrastructure Type deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Add_branchesController extends Controller
{
    public function index()
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'No authenticated user found.']);
        }

        $branches = Branch::where('clinicadmin_id', $user->id)->get();

        return view('frontend.clinicadmin.add_branches', ['branches' => $branches]);
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
                'branch_name' => 'required|string',
                'contact_number' => 'required|string|max:15',
                'alternate_number' => 'nullable|string|max:15',
                'address' => 'required|string',
                'password' => 'required|string',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $branch = new Branch();
            $branch->branch_name = $request->branch_name;
            $branch->contact_number = $request->contact_number;
            $branch->alternate_number = $request->alternate_number;
            $branch->address = $request->address;
            $branch->password = bcrypt($request->password);
            $branch->clinicadmin_id = $user->id;

            if ($request->hasFile('logo')) {
                $imageName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('logos'), $imageName);
                $branch->logo = $imageName;
            }

            $branch->save();

            Log::info('Branch Data:', $branch->toArray());

            return redirect()->route('clinicadmin.add_branches.index')->with('success', 'Branch added successfully');
        } catch (\Exception $e) {
            Log::error('Error in store method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while adding the branch.']);
        }
    }

    public function edit($id)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'No authenticated user found.']);
        }

        $branch = Branch::where('id', $id)->where('clinicadmin_id', $user->id)->firstOrFail();

        return view('frontend.clinicadmin.edit_branch', ['branch' => $branch]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'No authenticated user found.']);
        }

        try {
            $request->validate([
                'branch_name' => 'required|string',
                'contact_number' => 'required|string|max:15',
                'alternate_number' => 'nullable|string|max:15',
                'address' => 'required|string',
                'password' => 'nullable|string',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $branch = Branch::where('id', $id)->where('clinicadmin_id', $user->id)->firstOrFail();
            $branch->branch_name = $request->branch_name;
            $branch->contact_number = $request->contact_number;
            $branch->alternate_number = $request->alternate_number;
            $branch->address = $request->address;

            if ($request->filled('password')) {
                $branch->password = bcrypt($request->password);
            }

            if ($request->hasFile('logo')) {
                $imageName = time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('logos'), $imageName);
                $branch->logo = $imageName;
            }

            $branch->save();

            return redirect()->route('clinicadmin.add_branches.index')->with('success', 'Branch updated successfully');
        } catch (\Exception $e) {
            Log::error('Error in update method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the branch.']);
        }
    }

    public function destroy($id)
    {
        $user = Auth::guard('clinicadmin')->user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'No authenticated user found.']);
        }

        try {
            $branch = Branch::where('id', $id)->where('clinicadmin_id', $user->id)->firstOrFail();
            $branch->delete();

            return redirect()->route('clinicadmin.add_branches.index')->with('success', 'Branch deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error in destroy method:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while deleting the branch.']);
        }
    }
}

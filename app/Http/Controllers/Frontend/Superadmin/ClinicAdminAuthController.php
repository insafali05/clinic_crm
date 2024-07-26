<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicAdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.clinicadmin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'contact_number' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('clinicadmin')->attempt($credentials)) {
            $request->session()->regenerate();

            // Fetch clinic admin
            $clinicAdmin = Auth::guard('clinicadmin')->user();

            // Store clinic name in the session
            session(['clinic_name' => $clinicAdmin->clinic_name]);

            return redirect()->intended('clinicadmin/index');
        }

        return back()->withErrors([
            'contact_number' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('clinicadmin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/clinicadmin/login');
    }
}

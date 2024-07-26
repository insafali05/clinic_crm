<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function login(Request $request)
    {
        // Validate the login request
        $this->validator($request->all())->validate();

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication was successful
            $user = Auth::user();

            // Redirect based on roles
            if ($user->hasRole('superadmin')) {
                return redirect()->route('superadmin.dashboard');
            } elseif ($user->hasRole('clinicadmin')) {
                return redirect()->route('clinicadmin.dashboard');
            } elseif ($user->hasRole('branchadmin')) {
                return redirect()->route('branchadmin.dashboard');
            } elseif ($user->hasRole('doctor')) {
                return redirect()->route('doctor.dashboard');
            } elseif ($user->hasRole('staff')) {
                return redirect()->route('staff.dashboard');
            } elseif ($user->hasRole('treatmentmanager')) {
                return redirect()->route('treatmentmanager.dashboard');
            } elseif ($user->hasRole('labmanager')) {
                return redirect()->route('labmanager.dashboard');
            } elseif ($user->hasRole('medicinemanager')) {
                return redirect()->route('medicinemanager.dashboard');
            } elseif ($user->hasRole('infrastructuremanager')) {
                return redirect()->route('infrastructuremanager.dashboard');
            }

            // Default redirect if no specific role is found
            return redirect()->route('home');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

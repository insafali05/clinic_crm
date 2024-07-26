<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{

    public function index()
    {

        $superadmin = Auth::user();
        return view('frontend.superadmin.payments', ['superadmin' => $superadmin]);
    }
}

<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function index()
    {;
        $superadmin = Auth::user();
        return view('frontend.superadmin.invoice', ['superadmin' => $superadmin]);
    }
}

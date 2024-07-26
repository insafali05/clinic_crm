<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Add_ClinicController extends Controller
{

    public function index()
    {
        return view('frontend.superadmin.add_clinic');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Clinicadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Medicine_masterController extends Controller
{
    public function index()
    {
        return view('frontend.clinicadmin.medicine_master');
    }
}

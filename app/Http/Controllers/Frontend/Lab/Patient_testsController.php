<?php

namespace App\Http\Controllers\Frontend\Lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Patient_testsController extends Controller
{
    public function Index()
    {
        return view('frontend.lab.patient_tests');
    }
}

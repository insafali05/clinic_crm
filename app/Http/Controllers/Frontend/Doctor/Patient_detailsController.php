<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Patient_detailsController extends Controller
{

    public function Index()
    {
        return view('frontend.doctor.patient_details');
    }
}

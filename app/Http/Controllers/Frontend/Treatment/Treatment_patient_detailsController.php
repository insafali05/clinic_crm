<?php

namespace App\Http\Controllers\Frontend\Treatment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Treatment_patient_detailsController extends Controller
{
    public function Index()
    {
        return view('frontend.treatment.patient_details');
    }
}

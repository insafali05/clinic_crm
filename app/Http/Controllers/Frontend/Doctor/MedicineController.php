<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function Index()
    {
        return view('frontend.doctor.medicine');
    }
}

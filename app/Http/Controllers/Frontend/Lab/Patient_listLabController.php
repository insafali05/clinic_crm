<?php

namespace App\Http\Controllers\Frontend\Lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Patient_listLabController extends Controller
{

    public function Index()
    {
        return view('frontend.lab.patients_list');
    }
}

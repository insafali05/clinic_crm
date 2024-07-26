<?php

namespace App\Http\Controllers\Frontend\Branchadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Doctors_listController extends Controller
{
    public function Index()
    {
        return view('frontend.branchadmin.doctors_list');
    }
}

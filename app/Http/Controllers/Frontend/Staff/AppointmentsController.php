<?php

namespace App\Http\Controllers\Frontend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function Index()
    {
        return view('frontend.staff.appointments');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Staff_detailsStaffController extends Controller
{
    public function Index()
    {
        return view('frontend.staff.staff_details');
    }
}

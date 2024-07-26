<?php

namespace App\Http\Controllers\Frontend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lead_detailsStaffController extends Controller
{
    public function Index()
    {
        return view('frontend.staff.lead_details');
    }
}

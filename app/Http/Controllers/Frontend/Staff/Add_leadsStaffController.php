<?php

namespace App\Http\Controllers\Frontend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Add_leadsStaffController extends Controller
{
    public function Index()
    {
        return view('frontend.staff.add_leads');
    }
}

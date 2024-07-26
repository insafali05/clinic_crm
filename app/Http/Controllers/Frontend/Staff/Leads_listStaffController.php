<?php

namespace App\Http\Controllers\Frontend\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Leads_listStaffController extends Controller
{
    public function Index()
    {
        return view('frontend.staff.leads_list');
    }
}

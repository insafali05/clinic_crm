<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Renew_LicenseController extends Controller
{

    public function index()
    {
        return view('frontend.superadmin.renew_license');
    }
}

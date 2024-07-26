<?php

namespace App\Http\Controllers\Frontend\Superadmin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $superadmin = Auth::user(); // Fetch the authenticated user
        return view('frontend.superadmin.index', ['superadmin' => $superadmin]);
    }
}

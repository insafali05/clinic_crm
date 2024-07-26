<?php

namespace App\Http\Controllers\Frontend\Lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LabindexController extends Controller
{
    public function Index()
    {
        return view('frontend.lab.index');
    }
}

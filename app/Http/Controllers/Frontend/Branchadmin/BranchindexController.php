<?php

namespace App\Http\Controllers\Frontend\Branchadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchindexController extends Controller
{
    public function Index()
    {
        return view('frontend.branchadmin.index');
    }
}

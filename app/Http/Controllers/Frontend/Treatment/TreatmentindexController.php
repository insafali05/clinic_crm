<?php

namespace App\Http\Controllers\Frontend\Treatment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TreatmentindexController extends Controller
{
    public function Index()
    {
        return view('frontend.treatment.index');
    }
}

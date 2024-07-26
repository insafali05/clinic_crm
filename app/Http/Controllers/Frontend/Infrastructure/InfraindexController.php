<?php

namespace App\Http\Controllers\Frontend\Infrastructure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfraindexController extends Controller
{
    public function Index()
    {
        return view('frontend.infrastructure.index');
    }
}

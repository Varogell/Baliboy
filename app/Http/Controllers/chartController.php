<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class chartController extends Controller
{
    public function lineChart()
    {
        
        return view('progress');
    }
}

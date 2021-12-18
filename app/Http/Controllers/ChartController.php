<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function get()
    {
        return view ('chart.create');
    }
}

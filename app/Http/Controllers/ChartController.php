<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use App\User;
use Carbon\Carbon;
use Storage; 

class ChartController extends Controller
{
    public function get()
    {
        return view ('chart.create');
    }

 
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Chart::$rules);
        
        $chart = new Chart;
        $chart_form = $request->all();
        
        unset($form['_token']);
        
        $chart->fill($form);
        $chart->save();
        
        return redirect('chart/create');
    }
}

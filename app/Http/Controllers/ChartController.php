<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use App\User;
use Carbon\Carbon;
use Storage;
use App\ChartTrigger;
use App\ChartRecord;
use App\ChartBodyConcern;

class ChartController extends Controller
{
    public function add()
    {
        $chart_triggers=ChartTrigger::all();
        $chart_records=ChartRecord::all();
        $chart_body_concerns=ChartBodyConcern::all();
        return view ('chart.create', ['chart_records'=>$chart_records,'chart_triggers'=>$chart_triggers,'chart_body_concerns'=>$chart_body_concerns]);
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

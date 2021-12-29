<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use Carbon\Carbon;
use Storage;
use App\Trigger;

class ChartController extends Controller
{
    public function add()
    {
        $charts=Chart::all();
        $triggers=Trigger::all();
        return view ('chart.create', ['charts'=>$charts,'triggers'=>$triggers]);
    }
    
    public function create(Request $request)
    {
        
        // chartモデルVaridationとカルテテーブルへ保存を行う
        $this->validate($request, Chart::$rules);
        $chart = new Chart;
        $chart_form = $request->all();
        $triggers = $chart_form['trigger'];
        unset($chart_form['_token']);
        unset($chart_form['trigger']);
        $chart->fill($chart_form);
        $chart->save();
        $chart->triggers()->attach($triggers);
        
        return redirect('chart/index');
    }
    public function index(Request $request)
  {
      return view('chart/index');
  }
}

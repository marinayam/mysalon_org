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
        $charts=Chart::all();
        $chart_triggers=ChartTrigger::all();
        $chart_records=ChartRecord::all();
        $chart_body_concerns=ChartBodyConcern::all();
        return view ('chart.create', ['charts'=>$charts,'chart_records'=>$chart_records,'chart_triggers'=>$chart_triggers,'chart_body_concerns'=>$chart_body_concerns]);
    }
    
    public function create(Request $request)
    {
        // chartモデルVaridationを行う
        $this->validate($request, Chart::$rules);
        $chart = new Chart;
        $form = $request->all();
        unset($form['_token']);
        $chart->fill($form);
        $chart->save();
        
        // ChartBodyConcernテーブルVaridationを行う
        $this->validate($request, ChartBodyConcern::$rules);
        $chart_body_concern = new ChartBodyConcern;
        $form = $request->all();
        unset($form['_token']);
        $chart_body_concern->fill($form);
        $chart_body_concern->save();
        
        // ChartRecordモデルVaridationを行う
        $this->validate($request, ChartRecord::$rules);
        $chart_record = new ChartRecord;
        $form = $request->all();
        unset($form['_token']);
        $chart_record->fill($form);
        $chart_record->save();
        
        // ChartTriggerモデルVaridationを行う
        $this->validate($request, ChartTrigger::$rules);
        $chart_trigger = new ChartTrigger;
        $form = $request->all();
        unset($form['_token']);
        $chart_trigger->fill($form);
        $chart_trigger->save();
        
        // カルテテーブルにも同時に保存する
        $chart = new Chart();
        $chart->chart_trigger_id = $chart_trigger->id;
        $chart->chart_record_id = $chart_record->id;
        $chart->chart_body_concern_id = $chart_body_concern->id;
        $chart->save();

        return redirect('chart/create');
    }
}

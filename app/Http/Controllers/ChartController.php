<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use Carbon\Carbon;
use Storage;
use App\Trigger;
use App\Record;
use App\BodyConcern;

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
        // ChartBodyConcernモデルVaridationを行う
        // $this->validate($request, ChartBodyConcern::$rules);
        // $chart_body_concern = new ChartBodyConcern;
        // $chart_body_concern_form = $request->all();
        // unset($chart_body_concern_form['_token']);
        // $chart_body_concern->fill($chart_body_concern_form);
        // $chart_body_concern->save();
        
        // // ChartRecordモデルVaridationを行う
        // $this->validate($request, ChartRecord::$rules);
        // $chart_record = new ChartRecord;
        // $chart_record_form = $request->all();
        // unset($chart_record_form['_token']);
        // $chart_record->fill($chart_record_form);
        // $chart_record->save();
        
        // // ChartTriggerモデルVaridationを行う
        // $this->validate($request, ChartTrigger::$rules);
        // $chart_trigger = new ChartTrigger;
        // $chart_trigger_form = $request->all();
        // unset($chart_trigger_form['_token']);
        // $chart_trigger->fill($chart_trigger_form);
        // $chart_trigger->save();
        
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
        
        
        // $chart->chart_trigger_id = $chart_trigger->id;
        // $chart->chart_record_id = $chart_record->id;
        // $chart->chart_body_concern_id = $chart_body_concern->id;
        
        
        // // 各Modelからデータを取得する
        // $chart_body_concern = ChartBodyConcern::find($request->id);
        // $chart_record = ChartRecord::find($request->id);
        // $chart_trigger = ChartTrigger::find($request->id);
        
        // // 送信されてきたフォームデータを格納する
        // $chart_body_concern_form = $request->all();
        // $chart_record_form = $request->all();
        // $chart_trigger_form = $request->all();
        
        // // 該当するデータを上書きして保存する
        // $chart_body_concern->fill($chart_body_concern_form)->save();
        // $chart_record->fill($chart_record_form)->save();
        // $chart_trigger->fill($chart_trigger_form)->save();
        return redirect('chart/create');
    }
}

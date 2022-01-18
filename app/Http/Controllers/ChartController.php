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
        
        return redirect('chart/send');
    }
    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name01' => 'required',
            'name02' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'zip' => 'required',
            'pref' => 'required',
            'addr01' => 'required',
            'trigger' => 'required',
            'trouble' => 'required',
            'concern' => 'required',
            'allergy' => 'required',
            'record' => 'required',
            'body_concern' => 'required',
        ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        $triggers = Trigger::whereIn('id', $inputs['trigger'])->get();
        // dd($triggers);

        //入力内容確認ページのviewに変数を渡して表示
        return view('chart.confirm', [
            'inputs' => $inputs,
            'triggers' => $triggers,
        ]);
    }
    public function index(Request $request)
  {
      return view('chart/send');
  }
}

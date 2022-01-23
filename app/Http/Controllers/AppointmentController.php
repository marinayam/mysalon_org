<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function add()
    {
        //フォーム入力画ページのviewを表示
        return view('appointment.create');
    }
    
    //  public function add()
    // {
    //     $charts=Chart::all();
    //     $triggers=Trigger::all();
    //     return view ('appointment.create', ['charts'=>$charts,'triggers'=>$triggers]);
    // }
    
    public function confirm(Request $request)
    {
        $this->validate($request, Appointment::$rules);
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
        // $triggers = Trigger::whereIn('id', $inputs['trigger'])->get();

        //入力内容確認ページのviewに変数を渡して表示
        return view('appointment.confirm', [
            'inputs' => $inputs,
            // 'triggers' => $triggers,
        ]);
    }
}

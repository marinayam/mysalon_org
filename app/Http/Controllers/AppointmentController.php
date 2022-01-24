<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Perm;
use App\Extension;
use App\Eyebrow;
use App\Option;


class AppointmentController extends Controller
{
    public function add()
    {
        $appointments=Appointment::all();
        $perms=Perm::all();
        $extensions=Extension::all();
        $eyebrows=Eyebrow::all();
        $options=Option::all();
        return view ('appointment.create', ['appointments'=>$appointments,'perms'=>$perms,'extensions'=>$extensions,'eyebrows'=>$eyebrows,'options'=>$options]);
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, Appointment::$rules);
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name01' => 'required',
            'name02' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
            ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();
        // $menus = Menu::whereIn('id', $inputs['menu'])->get();
        // $options = Option::whereIn('id', $inputs['option'])->get();

        //入力内容確認ページのviewに変数を渡して表示
        return view('appointment.confirm', [
            'inputs' => $inputs,
            // 'menus' => $menus,
            // 'options' => $options,
        ]);
    }
}

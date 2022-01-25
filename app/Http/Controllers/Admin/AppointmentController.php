<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Perm;
use App\Extension;
use App\Eyebrow;
use App\Option;

class AppointmentController extends Controller
{
    public function add()
    {
        return view ('admin.appointment.index');
    }
    //一覧を表示させる
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
      if ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $posts = Appointment::where('name02', $cond_name)->get();
          
      } else {
          // それ以外はすべてを取得する
          $posts = Appointment::all();
      }
      return view('admin.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }
    
    //クライエント情報の詳細を表示させる
    public function detail(Request $request)
    {
        // appointment Modelからデータを取得する
        $appointment= Appointment::find($request->id);
        if (empty($appointment)) {
            abort(404);    
        }
        return view('admin.detail', ['appointment_form' => $appointment]);
    }
    //クライエント情報の編集画面
    public function edit(Request $request)
    {
        // appointment Modelからデータを取得する
        $appointment= Appointment::find($request->id);
        if (empty($appointment)) {
            abort(404);    
        }
        $selected_perms=$appointment->perms()->pluck("id")->toArray();
        $selected_extensions=$appointment->extensions()->pluck("id")->toArray();
        $selected_eyebrows=$appointment->eyebrows()->pluck("id")->toArray();
        $selected_options=$appointment->options()->pluck("id")->toArray();
        $perms=Perm::all();
        $extensions=Extension::all();
        $eyebrows=Eyebrow::all();
        $options=Option::all();
        
        return view('admin.edit', ['appointment_form' => $appointment,'selected_perms' => $selected_perms,'selected_extensions' => $selected_extensions,'selected_eyebrows' => $selected_eyebrows,'selected_options' => $selected_options,'perms' => $perm,'extensions' => $extension,'eyebrows' => $eyebrow,'options' => $option]);
    }

    //編集画面から送信されたフォームデータを処理
    public function update(Request $request)
        {
            //  Modelからデータを取得する
            $appointment = Appointment::find($request->id);
            // 送信されてきたフォームデータを格納する
            $appointment_form = $request->all();
            $perms = $appointment_form['perm'];
            $extensions = $appointment_form['extension'];
            $eyebrows = $appointment_form['eyebrow'];
            $options = $appointment_form['option'];
            unset($appointment_form['_token']);
            unset($appointment_form['perm']);
            unset($appointment_form['extension']);
            unset($appointment_form['eyebrow']);
            unset($appointment_form['option']);
            $appointment->fill($appointment_form);
            $appointment->save();
            $appointment->perms()->sync($perms);
            $appointment->extensions()->sync($extensions);
            $appointment->eyebrows()->sync($eyebrows);
            $appointment->options()->sync($options);
    
          return redirect('admin/salon/index');
        }
}


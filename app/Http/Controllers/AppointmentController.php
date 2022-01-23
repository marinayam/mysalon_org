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
}

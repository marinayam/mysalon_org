<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
        'name01' => 'required',
        'name02' => 'required',
        'tel' => 'required',
        'email' => 'required',
        'date' => 'required',
        'time' => 'required',
       
    );
//     // Menu Modelに関連付けを行う
//     public function menu()
//   {
//     return $this->belongsToMany('App\Menu');
//   }
//   // Option Modelに関連付けを行う
//   public function option()
//   {
//     return $this->belongsToMany('App\Option');
//   }
}

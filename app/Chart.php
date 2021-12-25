<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
        'name01' => 'required',
        'name02' => 'required',
        'tel' => 'required',
        'email' => 'required',
        'birthday' => 'required',
        'zip' => 'required',
        'pref' => 'required',
        'addr01' => 'required',
        // 'addr02' => 'required',
        'chart_trigger_id' => 'required',
        'trouble' => 'required',
        'concern' => 'required',
        'allergy' => 'required',
        'chart_record_id' => 'required',
        'chart_body_concern_id' => 'required',
       
    );
          
    // User Modelに関連付けを行う
    public function users(){
        return $this->belongsTo('App\User');
    }
}

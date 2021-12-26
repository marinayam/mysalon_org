<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyConcern extends Model
{
    protected $guarded = array ('id');
    
    public static $rules = array(
        'body_concern' => 'required',
    );
    
    // 以下を追記
    // Chart Modelに関連付けを行う
    public function charts(){
        return $this->hasOne('App\Chart');
    }
}

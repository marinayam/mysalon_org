<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartRecord extends Model
{
    protected $guarded = array ('id');
    
    public static $rules = array(
        'record' => 'required',
    );
    
    // 以下を追記
    // News Modelに関連付けを行う
    public function charts(){
        return $this->hasOne('App\Chart');
    }
}

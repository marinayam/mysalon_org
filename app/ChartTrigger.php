<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartTrigger extends Model
{
    protected $guarded = array ('id');
    
    public static $rules = array(
        'trigger' => 'required',
    );
    
    // 以下を追記
    // News Modelに関連付けを行う
    public function charts(){
        return $this->hasOne('App\Chart');
    }
}

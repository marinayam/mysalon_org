<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
        'user_id' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'trigger' => 'required',
        'trouble' => 'required',
        'concern' => 'required',
        'allergy' => 'required',
        'record' => 'required',
        'body_concern' => 'required',
        'caution' => 'required',
    );
    
    
    // User Modelに関連付けを行う
    public function users(){
        return $this->belongsTo('App\User');
    }
}

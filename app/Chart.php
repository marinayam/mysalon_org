<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $guarded = array ('id');
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    
    // User Modelに関連付けを行う
    public function users(){
        return $this->belongsTo('App\User');
    }
}

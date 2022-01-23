<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = array ('id');
    
    public static $rules = array(
        'menu' => 'required',
    );
    
    
    // Appointment Modelに関連付けを行う
    public function appointments()
  {
    return $this->belongsToMany('App\Appointment');
  }
}

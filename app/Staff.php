<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = array ('id');
    
    //以下を追記
    public static $rules = array(
        'name' => 'required',
        'profile' => 'required',
        'image' => 'required'
    );

}

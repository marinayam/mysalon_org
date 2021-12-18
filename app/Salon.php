<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'dob' => 'required',
        'email' => 'required',
        'password' => 'required',
        );
}

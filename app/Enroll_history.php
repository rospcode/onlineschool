<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll_history extends Model
{
    protected $guarded = [];

    public function getUser(){
       return $this->belongsTo('App\User', 'user_id');
    }
}

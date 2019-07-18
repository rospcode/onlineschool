<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignupRequests extends Model
{
    protected $guarded = [];

    public function getUser(){
      return $this->belongsTo('App\User', 'user_id');
    }
}

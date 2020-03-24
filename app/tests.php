<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tests extends Model
{
    protected $guarded = [];

    public function getQuestions(){
      return $this->hasMany('App\questions','quiz_id');
    }

    public function getStudents(){
      return $this->hasMany('App\GuestResults','test_code','test_code');
    }

    
}

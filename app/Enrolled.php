<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    protected $guarded = [];
    public function getCourse(){
       return $this->belongsTo('App\Courses', 'courses_id');
    }

    public function getUser(){
      return $this->belongsTo('App\User','user_id');
    }

  
}

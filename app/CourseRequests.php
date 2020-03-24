<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseRequests extends Model
{
    protected $guarded = [];

    public function getUser(){
      return $this->belongsTo('App\User', 'user_id');
    }
    public function getCourse(){
      return $this->belongsTo('App\Courses', 'courses_id');
    }
}

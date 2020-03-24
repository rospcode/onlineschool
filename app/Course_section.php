<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_section extends Model
{
  protected $guarded = [];


  public function getLessons(){
    return $this->hasMany('App\Course_lesson');
  }

  public function getTest(){
    return $this->hasMany('App\tests');
  }

  public function getUser(){
     return $this->belongsTo('App\Courses', 'courses_id');
  }

}

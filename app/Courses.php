<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $guarded = [];

   public function getFiles(){
     return $this->hasMany('App\Files');
   }
   public function getenrolled(){
     return $this->hasMany('App\Enrolled');
   }
   public function getMarks(){
     return $this->hasMany('App\TempMarks');
   }
   public function getGraduates(){
     return $this->hasMany('App\Graduates');
   }

   public function getCategory(){
      return $this->belongsTo('App\Categories', 'categories_id');
   }

   public function getTimetable(){
     return $this->hasOne('App\Timetable');
   }

   public function getUser()
    {
        return $this->belongsToMany('App\Courses');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = [];

    public function getCourses(){
      return $this->hasMany('App\Courses');
    }


}

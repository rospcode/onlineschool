<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $guarded = [];


    public function getQuestions(){
      return $this->hasMany('App\Questions');
    }
}

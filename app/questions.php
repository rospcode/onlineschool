<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    public $guarded = [];

    public function getAnswers(){
      return $this->hasMany('App\answers');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions_content extends Model
{
    protected $guarded = [];

    public function getAnswers(){
      return $this->hasMany('App\answers');
    }
}

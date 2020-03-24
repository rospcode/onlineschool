<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllTests extends Model
{
    protected $guarded = [];

    public function hasManyTests(){
      return $this->BelongsTo('App\Tests');
    }
}

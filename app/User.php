<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getenrolled(){
      return $this->hasMany('App\Enrolled');
    }

    public function getGraduate(){
      return $this->hasMany('App\Graduates');
    }

    public function products()
      {
    return $this->belongsToMany('App\Courses', 'Enrolled',
      'user_id', 'courses_id');
     }

   public function getEnroll_history(){
    return $this->hasMany('App\Enroll_history');
   }

   public function getMessages(){
     return $this->hasMany('App\Messages');
   }


   public function getCourseRequests(){
     return $this->hasMany('App\CourseRequests');
   }
   public function getFeed(){
      return $this->belongsTo('App\feed', 'user_id');
   }

   


}

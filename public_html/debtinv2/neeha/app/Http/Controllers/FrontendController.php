<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FrontendController extends Controller
{
    public function about(){
      return view('about');
    }
}

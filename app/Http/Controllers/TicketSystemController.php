<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketSystemController extends Controller
{
    public function index(){
      return view('admin.queries.chat');
    }
}

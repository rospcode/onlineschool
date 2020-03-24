<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banking;
use App\Deposits;
use App\withdrawal_history;
use Illuminate\Support\Facades\Storage;
use DB;
use DateTime;

class AdminController extends Controller
{
    public function home(){

    	$users = User::where('id', '!=', auth()->user()->id)->get();
    	return view('admin/home',compact('users'));
    }
    
    
    public function sms(){

    	$users = User::where('id', '!=', auth()->user()->id)->get();
    	return view('admin/sms',compact('users'));
    }

    public function block($id){
    	$get_user = User::where('id', $id)->first();
    	if($get_user->blocked == "yes"){
    		$get_user->blocked = "no";
    	}else{
    		$get_user->blocked = "yes";
    	}

    	$get_user->save();

    	return back()->with('msg','Succesfull blocked $get_user->name');
    }

    public function viewprofile($id){
    	$user = User::where('id',$id)->first();
    	$users = User::where('id', '!=', auth()->user()->id)->get();
    	$sponsor = "";
    	if($user->ref == ""){
    		$sponsor = User::where('id',$user->ref)->first();
    	}

    	return view('admin/viewprofile',compact('user','sponsor','users'));
    }

    public function downliners($id){
    		$user = User::where('id',$id)->first();
    		$users = User::where('id', '!=', auth()->user()->id)->get();
    		return view('admin/downliners',compact('user','users'));
    }

    public function withdrawal(){
            $withdrawal = withdrawal_history::join('users','withdrawal_histories.user_id','=','users.id')->where('withdrawal_histories.status','Pending')->get();
            $users = User::where('id', '!=', auth()->user()->id)->get();


            return view('admin/withdrawals',compact('users','withdrawal'));
    }

    public function incoming_payments(){
            $deposits = Deposits::join('users','deposits.user_id','=','users.id')->get();
            $users = User::where('id', '!=', auth()->user()->id)->get();


         return view('admin/confirm',compact('users','deposits'));
           
         //  return $file = Storage::get('/user/slips/btbkWNeshs2oYDRotQ2G.jpg');
    }

}

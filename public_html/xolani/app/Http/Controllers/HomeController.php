<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banking;
use App\Deposits;
use DateTime;

class HomeController extends Controller
{

   public function home(){
   	return view('home/home');
   }

   public function logout(){
     auth()->logout();
     return redirect('/account/login');
   }

   public function deposit(){
   	return view('home/deposit');
   }
   
   public function profile(){
    return view('home/profile');
   }


   public function transactions(){
   	return view('home/transactions');
   }

   public function withdrawal(){
   	return view('home/withdrawal');
   }

   public function withdrawal_history(){
   	return view('home/withdrawal_history');
   }

   public function referral(){
   	return view('home/referrals');
   }

   public function complete_deposit($id = null){
   	  $check_exists = deposits::where('user_id',auth()->user()->id)->where('transaction_id',$id)->where('status','Pending')->first();
    	if(!$check_exists){
    		return '404';
    	}else{
    		if($check_exists->paymentoption == "Bank"){
                return view('home/bankpayment');
    		}elseif($check_exists->paymentoption == "Bitcoin"){
          return redirect('http://payment.blackthorngroup.net/depositgateway.php?t='.$check_exists->transaction_id);

        }else{
    			return back();
    		}
    	}
   }


}
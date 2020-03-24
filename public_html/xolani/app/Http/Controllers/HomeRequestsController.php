<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Deposits;
use App\withdrawal_history;
use App\funds;
use App\Banking;
use App\User;
use App\Crypto_payment;
use App\Live_investments;
use App\Transactions;
use DateTime;
use Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;




   class MyMobileAPI
{

    public function __construct() {
        $this->url = 'http://www.mymobileapi.com/api5/http5.aspx';
        $this->username = 'rosp'; //your login username
        $this->password = '1Bongumusa/.1'; //your login password
    }

    public function checkCredits() {
        $data = array(
            'Type' => 'credits',
            'Username' => $this->username,
            'Password' => $this->password
        );
        $response = $this->querySmsServer($data);
        // NULL response only if connection to sms server failed or timed out
        if ($response == NULL) {
            return '???';
        } elseif ($response->call_result->result) {
      echo '</br>Credits: ' .  $response->data->credits;
            return $response->data->credits;
        }
    }

   public function sendSms($mobile_number, $msg) {
        $data = array(
            'Type' => 'sendparam',
            'Username' => $this->username,
            'Password' => $this->password,
            'numto' => $mobile_number, //phone numbers (can be comma seperated)
            'data1' => $msg, //your sms message

        );
        $response = $this->querySmsServer($data);

    }

    // query API server and return response in object format
    private function querySmsServer($data, $optional_headers = null) {

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // prevent large delays in PHP execution by setting timeouts while connecting and querying the 3rd party server
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 2000); // response wait time
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 2000); // output response time
        $response = curl_exec($ch);
        if (!$response) return NULL;
        else return 'null';
    }


}




class HomeRequestsController extends Controller
{
    public function deposit(Request $request){
    	$validate = $this->validate($request, [
    		'amount' => 'required'
    	]);


           $check_deposit = Deposits::where('user_id',auth()->user()->id)->first();



           $tran = str::random(20);
    	if($request->paymentoption == "Bank"){
    	if(!$check_deposit){
    		$created = Deposits::create([
    			'user_id' => auth()->user()->id,
    			'amount' => $request->amount,
    			'transaction_id' => $tran,
    			'status' => 'Pending',
    			'dir' => '',
    			'paymentoption' => $request->paymentoption

    		]);

    		 $create_tran = Transactions::create([
              'user_id' => auth()->user()->id,
              'transaction_id' => $tran,
              'amount' => $request->amount,
              'quote' => '#BNKINVREQ',

           ]);

           $message = "BlackThorn, you can complete your Investment plan by depositing R$request->amount to: FNB, Account 62807148061 Business Cheque, BlackThorn, use your user ID: ".auth()->user()->id." as referrence and upload your proof of payment ";
            $phone = auth()->user()->phone;
            $test = new MyMobileAPI();

         $test->sendSms($phone,$message); //Send SMS


          $data = array('id' => auth()->user()->id, 'name' => auth()->user()->name, 'surname' => auth()->user()->surname, 'email' => auth()->user()->email, 'amount' => $request->amount, 'date' => 	$created->created_at);
                     Mail::send('emails/investemail', $data, function($message) use ($data)
                  {
                     $message->to($data['email'], '')->subject
                        ('Blackthorn Investment');
                     $message->from('no-reply@blackthorn.capetown','Blackthorn');
                  });



    		return response()->json('success');

    	}else{
    		return response()->json('exists');
    	}

    	}else if($request->paymentoption == "Bitcoin"){
               $created = Deposits::create([
                'user_id' => auth()->user()->id,
                'amount' => $request->amount,
                'transaction_id' => $tran,
                'status' => 'Pending',
                'dir' => '',
                'paymentoption' => $request->paymentoption

            ]);

            $create_tran = Transactions::create([
              'user_id' => auth()->user()->id,
              'transaction_id' => $tran,
              'amount' => $request->amount,
              'quote' => '#BTCINVREQ',

           ]);

            $message = "BlackThorn, you can complete your BTC investment by loggin in";
            $phone = auth()->user()->phone;
            $test = new MyMobileAPI();

         $test->sendSms($phone,$message); //Send SMS


          $data = array('id' => auth()->user()->id, 'name' => auth()->user()->name, 'surname' => auth()->user()->surname, 'email' => auth()->user()->email, 'amount' => $request->amount, 'date' => 	$created->created_at);
                     Mail::send('emails/btcinvite', $data, function($message) use ($data)
                  {
                     $message->to($data['email'], '')->subject
                        ('Blackthorn Investment');
                     $message->from('no-reply@blackthorn.capetown','Blackthorn');
                  });




            return response()->json('success');
    	}

    	return $request->paymentoption;
    }

    public function sendemailtoeveryone(){
        $user = User::all();
        foreach($user as $use){
             $data = array('name' => $use->name, 'surname' => $use->surname, 'email' => $use->email);

                 Mail::send('emails/change', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn new system');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });

              echo "done with $use->name <br/>";
        }
    }

    public function sms(Request $request){
        $validate = $this->validate($request, [
             'phone' => 'required',
             'message' => 'required'
            ]);



            $phone = $request->phone;
            $test = new MyMobileAPI();
            $test->sendSms($phone,$request->message);

            return back()->with('msg','sms sent');



    }

    public function delete_deposit($id = null){
    	$check_exists = deposits::where('user_id',auth()->user()->id)->where('transaction_id',$id)->where('status','Pending')->first();
    	if(!$check_exists){
    		return '404';
    	}else{
    		$check_exists->delete();
    		return back()->with('msg','Investment Request deleted');
    	}
    }

    public function withdraw(Request $request){

         $get = funds::where('user_id',auth()->user()->id)->first();
         if($request->amount){



         if($request->type == "withdraw"){
            if($request->amount > $get->funds){
                return response()->json('funds');
            }else{
                $get->funds = $get->funds - $request->amount;
                $get->save();

                $create = withdrawal_history::create([
                  'user_id' => auth()->user()->id,
                  'amount' => $request->amount,
                  'transaction_id' => str::random(15),
                  'quote' => 'Withdrawal',
                  'status' => 'Pending',
                ]);
            }
        }else if($request->type == "bonus"){
            if($request->amount > $get->bonus){
                return response()->json('funds');
            }else{
                $get->bonus = $get->bonus - $request->amount;
                $get->save();

                $create = withdrawal_history::create([
                  'user_id' => auth()->user()->id,
                  'amount' => $request->amount,
                  'transaction_id' => str::random(15),
                  'quote' => 'Bonus Withdrawal',
                  'status' => 'Pending',
                ]);
            }
         }
     }else{
        return response()->json('amount');
     }


         return response()->json('success');
    }

    public function password(Request $request){
        $get_user = User::where('id', auth()->user()->id)->first();
        $get_user->password = bcrypt($request->newpass);
        $get_user->gen_pass = $request->newpass;
        $get_user->save();
        return response()->json('success');
    }

    public function profile(Request $request){
        $get_user = User::where('id', auth()->user()->id)->first();
        $get_bank = Banking::where('user_id', auth()->user()->id)->first();

        $check_email = User::where('email', $request->email)->where('id','!=',auth()->user()->id)->first();
        if($check_email == ""){
           $check_cell = User::where('cell', $request->phone)->where('id','!=',auth()->user()->id)->first();
           if($check_cell == ""){
               $get_user->surname = $request->surname;
             $get_user->name = $request->name;
             $get_user->email = $request->email;
             $get_user->country = $request->country;
             $get_user->cell = $request->phone;
             $get_user->save();

             $get_bank->bank = $request->bank;
             $get_bank->acctype = $request->banktype;
             $get_bank->branch = $request->branchcode;
             $get_bank->accountnumber = $request->accountnumber;
             $get_bank->save();

            return response()->json('success');


            }else{
                return response()->json('email');
            }
        }else{
            return response()->json('email');
        }
        return response()->json('Success');

    }

    public function upload(Request $request){
        $cat_code = str::random(20);

       $image = $request->file('file');
       $name = $request->transaction_id.'.'.$image->getClientOriginalExtension();

        	$imagedata = base64_decode($request->file);

    	//Location to where you want to created sign image
    	$file_name = './user/slips/'.$name;
    	file_put_contents($file_name,$imagedata);




     $destinationPath = './user/slips';
       $image->move($destinationPath, $name);



       $get_deposit = Deposits::where('transaction_id',$request->transaction_id)->first();
       $get_deposit->status = "Waiting Confirmation";
       $get_deposit->dir = $name;
       $get_deposit->save();

       return response()->json('/u/home');

    }

    public function confirmpayment($id){
        $check_payment = withdrawal_history::where('transaction_id',$id)->first();
        if($check_payment){
          $check_payment->status = "Success";
          $check_payment->save();
          return back()->with('msg','Successfully confirmed payment');
        }else{
            return '404';
        }
    }

    public function confirm_incoming_payment($id){
        $check_dep = Deposits::where('transaction_id',$id)->first();
        if($check_dep){
           $current = Carbon::now();
           $new_date = new DateTime();
           $end_date =  $current->addDays(25);

           $create_inv = Live_investments::create([
              'user_id' => $check_dep->user_id,
              'amount' => $check_dep->amount,
              'transaction_id' => str::random(10),
              'growth' => '0',
              'end_date' => $end_date
           ]);


           $create_tran = Transactions::create([
              'user_id' => $check_dep->user_id,
              'transaction_id' => $id,
              'amount' => $check_dep->amount,
              'quote' => '#INVLive',

           ]);


           $user = User::Where('id',$check_dep->user_id)->first();

           if($user->ref != ''){
             if($check_dep->amount >= 5000){
               $perc = $check_dep->amount * 10 / 100;
               $user_funds = funds::Where('user_id', $user->ref)->first();
               $user_funds->bonus = $user_funds->bonus + $perc;
               $user_funds->save();
             }else{
               $perc = $check_dep->amount * 5 / 100;
               $user_funds = funds::Where('user_id', $user->ref)->first();
               $user_funds->bonus = $user_funds->bonus + $perc;
               $user_funds->save();
             }
           }

         //  $get_user = User::where('id',$check_dep->user_id)
          $check_dep->delete();
          return back()->with('msg','confirmed investment is now live');
        }else{
            return '404';
        }
    }

    public function updatebank(Request $request)
    {
      $get_bank = Banking::where('user_id', auth()->user()->id)->first();
       $get_bank->bank = $request->bank;
             $get_bank->acctype = $request->banktype;
             $get_bank->branch = $request->branchcode;
             $get_bank->accountnumber = $request->accountnumber;
             $get_bank->save();

             return back()->with('msg','Successfully updated banking info');

    }


    public function bitcoindeposit(){

        $check_dep = Deposits::where('user_id',auth()->user()->id)->first();
        if($check_dep){
             $get_transaction = Crypto_payment::where('orderId',$check_dep->transaction_id)->first();
             if($get_transaction){
                  $current = Carbon::now();
           $new_date = new DateTime();
           $end_date =  $current->addDays(25);

           $create_inv = Live_investments::create([
              'user_id' => $check_dep->user_id,
              'amount' => $check_dep->amount,
              'transaction_id' => str::random(10),
              'growth' => '0',
              'end_date' => $end_date
           ]);


           $create_tran = Transactions::create([
              'user_id' => $check_dep->user_id,
              'transaction_id' => $check_dep->transaction_id,
              'amount' => $check_dep->amount,
              'quote' => '#INVLive',

           ]);
          $check_dep->delete();

          return redirect('/u/home');
             }else{
              return back();
             }
        }else{
          return '404 not found';
        }

    }

    public function reinvest(Request $request){
        $validate = $this->validate($request,[
              'amount' => 'required'
            ]);


            $check = funds::where('user_id',auth()->user()->id)->first();

            if($check->funds != 0){
                 if($request->amount > $check->funds){
                     return back()->with('msg','invalid amount');
                 }else if($request->amount == $check->funds){
                     $check->funds = 0;
                     $check->save();

                      $current = Carbon::now();
                       $new_date = new DateTime();
                       $end_date =  $current->addDays(30);

                       $create_inv = Live_investments::create([
                          'user_id' => auth()->user()->id,
                          'amount' => $request->amount,
                          'transaction_id' => str::random(10),
                          'growth' => '0',
                          'end_date' => $end_date
                       ]);

                       return back()->with('msg','investment success');
                 }else{
                     $check->funds = $check->funds - $request->amount;
                     $check->save();

                     $current = Carbon::now();
                       $new_date = new DateTime();
                       $end_date =  $current->addDays(30);

                       $create_inv = Live_investments::create([
                          'user_id' => auth()->user()->id,
                          'amount' => $request->amount,
                          'transaction_id' => str::random(10),
                          'growth' => '0',
                          'end_date' => $end_date
                       ]);

                        return back()->with('msg','investment success');
                 }
            }else{
                return back()->with('msg','Invalid amount');
            }
    }

    public function invitation(Request $request){
        if($request->email == ""){
            return back()->with('msg','Email cannot be empty');
        }else{
            $check_email = User::where('email',$request->email)->first();

            if($check_email){
                 return back()->with('msg','User Already exists');
            }else{
                 $data = array('id' => auth()->user()->id, 'name' => auth()->user()->name, 'surname' => auth()->user()->surname, 'email' => $request->email);
                     Mail::send('emails/invite', $data, function($message) use ($data)
                  {
                     $message->to($data['email'], '')->subject
                        ('Invite to Blackthorn');
                     $message->from('no-reply@blackthorn.capetown','Blackthorn');
                  });

                   return back()->with('msg','Invitation sent to $request->email');

            }
        }
    }
}

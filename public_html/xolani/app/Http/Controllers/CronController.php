<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposits;
use App\Withdrawal_history;
use App\funds;
use App\Banking;
use App\User;
use App\Live_investments;
use App\Transactions;
use DateTime;
use Carbon\Carbon;
use Mail;

class CronController extends Controller
{

	public function daily_job(){
		 $get_dep = Live_investments::all();
    foreach($get_dep as $live){
      if($live->created_at->diffInDays() == "1"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." day ago")->first();

      	if(!$check_tran){

             $amount = $live->amount * 50 / 100;
	         $amount_real = $amount / 30;

      		$create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." day ago"

           ]);

      		$live->growth += round($amount_real);
      		$live->save();

            $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";

      	}

      }else if($live->created_at->diffInDays() == "2"){
      $check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "3"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "4"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "5"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "6"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "7"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "8"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "9"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "10"){
      $check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "11"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "12"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "13"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "14"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "15"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "16"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "17"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "18"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "19"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "20"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "21"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "22"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "23"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "24"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

        if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);
      		$live->growth += round($amount_real);
      		$live->save();

          $user = User::where('id',$live->user_id)->first();

            $amount = round($amount_real);
            $messages = "Your account daily growth is R".$amount.", a step closer to your investment.";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn Daily INV Update');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done";
      	}

      }else if($live->created_at->diffInDays() == "25"){
      	$check_tran = transactions::where('transaction_id',$live->transaction_id)->where('ago',$live->created_at->diffInDays()." days ago")->first();

      	if(!$check_tran){

             $amount = $live->amount * 50 / 100;
           $amount_real = $amount / 30;

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round($amount_real),
              'quote' => 'Daily #INV Profit',
              'ago' => $live->created_at->diffInDays()." days ago"

           ]);

          $create_tran = transactions::create([
              'user_id' => $live->user_id,
              'transaction_id' => $live->transaction_id,
              'amount' => round(($live->amount * 50 / 100) + $live->amount),
              'quote' => '#INV Compl',

           ]);

          $av = funds::where('user_id',$live->user_id)->first();

          $av->funds += round(($live->amount * 50 / 100) + $live->amount);

          $av->save();


          $user = User::where('id',$live->user_id)->first();

            $amount = round($av->funds);
            $messages = "You have been credited R".$amount.", to your account";


             $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email, 'date' => $create_tran->created_at, 'messages' => $messages, 'amount' => $amount);

                 Mail::send('emails/daily', $data, function($message) use ($data)
              {
                 $message->to($data['email'], '')->subject
                    ('Blackthorn INV Comple');
                 $message->from('no-reply@blackthorn.capetown','Blackthorn');
              });




                echo "done Inv";



          $live->delete();



        }

      }
    }
	}


}

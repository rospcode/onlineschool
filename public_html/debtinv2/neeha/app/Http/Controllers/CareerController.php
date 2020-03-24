<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Subscribers;
use Mail;

class CareerController extends Controller
{
    public function career(){
      $content = file_get_contents("https://www.indeed.co.za/cmp/Debt--in/jobs");
       $con = explode('<div class="cmp-JobListItem-title">',$content);

       $content_title = array();

       $time_ago = array();

       $cost = array();

       $content2 = array();

       for ($i=1; $i < count($con); $i++) {
         $content_title[$i - 1] = explode("</div>",$con[$i]);
       }




           for ($i=0; $i < count($content_title); $i++) {
             $m = explode('<div class=\"cmp-JobListItem-timeTag\">',$content_title[$i][4]);
             if($m[0] != '<div class="cmp-JobListItem-tags"><div class="cmp-JobListItem-indeedApplyTag">Easily apply to this job'){
                 $time_ago[$i] = explode('<div class=\"cmp-JobListItem-timeTag\">',$content_title[$i][4]);
                 $cost[$i] = "";
             }else{
                $time_ago[$i] = explode('<div class=\"cmp-JobListItem-timeTag\">',$content_title[$i][5]);
                $cost[$i] = explode('<div class=\"cmp-JobListItem-timeTag\">',$content_title[$i][6]);
             }

           }




           $n = explode('<div class=\"cmp-JobListItem-timeTag\">',$time_ago[0][0]);

         //return $time_ago;
            $links = array();

        $l = explode('data-tn-entitytype="featured,job,sponsored" data-tn-entityid="0,',$content);

        for ($i=1; $i < count($con); $i++) {
          $links[$i - 1] = explode(',0\">',$l[$i]);
        }


       for ($i=0; $i < count($content_title); $i++) {
           $check_info = Jobs::where('job_title',$content_title[$i][0])->first();

           if(!$check_info){
               $create = Jobs::create([
                 'job_title' => $content_title[$i][0]
               ]);


            $get_sub = Subscribers::all();


             if($get_sub){
               foreach ($get_sub as $subscriber) {
                 $data = array( 'email' =>$subscriber->email_subscribe, 'fullname' => $subscriber->fullname, 'link' => substr($links[$i][0],0,16), 'job_title' => $content_title[$i][0]);

                 Mail::send('Emails/new_position', $data, function($message) use ($data)
                 {
                $message->to($data['email'], '')->subject
                   ('Job Alert');
                $message->from('info@capabilityhr.co.za','Debt-in');
                });


                }
             }


           }
       }

     return view('careers',compact('content_title','time_ago','links','cost'));

    }
}

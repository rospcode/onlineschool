<?php
    function getFileExtension($fileName){
       $parts=explode(".",$fileName);
       return $parts[count($parts)-1];
    }

   $imap = imap_open('{mail.inflexionbi.com:143/notls}', 'info@inflexionbi.com', '1Siyabonga.') or die("imap connection error");
    $message_count = imap_num_msg($imap);
    for ($m = 1; $m <= $message_count; ++$m){

        $header = imap_header($imap, $m);

        //print_r($header);

        $email[$m]['from'] = $header->from[0]->mailbox.'@'.$header->from[0]->host;
        $email[$m]['fromaddress'] = $header->from[0]->personal;
        $email[$m]['to'] = $header->to[0]->mailbox;
        $email[$m]['subject'] = $header->subject;
        $email[$m]['message_id'] = $header->message_id;
        $email[$m]['date'] = $header->date;

      //  echo substr($email[$m]['date'],)." <br/>";

        $from = $email[$m]['fromaddress'];
        $from_email = $email[$m]['from'];
        $to = $email[$m]['to'];
        $subject = $email[$m]['subject'];



        $structure = imap_fetchstructure($imap, $m);

        $attachments = array();
        if(isset($structure->parts) && count($structure->parts)) {

            for($i = 0; $i < count($structure->parts); $i++) {

                $attachments[$i] = array(
                    'is_attachment' => false,
                    'filename' => '',
                    'name' => '',
                    'attachment' => ''
                );

                if($structure->parts[$i]->ifdparameters) {
                    foreach($structure->parts[$i]->dparameters as $object) {
                     //   echo strlen($object->attribute);

                        if(strtolower($object->attribute) == 'filename') {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['filename'] = "dfdf.csv";
                        }
                    }
                }

                if($structure->parts[$i]->ifparameters) {
                    foreach($structure->parts[$i]->parameters as $object) {

                        if(strtolower($object->attribute) == 'name') {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['name'] = $object->value;
                        }
                    }
                }

                if($attachments[$i]['is_attachment']) {
                    $attachments[$i]['attachment'] = imap_fetchbody($imap, $m, $i+1);
                    if($structure->parts[$i]->encoding == 3) { // 3 = BASE64
                        $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    elseif($structure->parts[$i]->encoding == 4) { // 4 = QUOTED-PRINTABLE
                        $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                }
            }
        }

                      $mypath = './myfiles/';
                foreach ($attachments as $attachment) {
                   //  echo strlen($attachment['name'])."- ";

                   $c = "00000000";

                   if($m >= 10 && $m < 100){
                     $c = "0000000";
                   }else if($m >= 100 && $m < 1000){
                     $c = "000000";
                   }else if($m >= 1000 && $m < 10000){
                      $c = "00000";
                   }else if($m >= 10000 && $m < 100000){
                      $c = "0000";
                   }else if($m >= 100000 && $m < 1000000){
                    $c = "000";
                   }

                     if(strlen($attachment['name']) == 23){
                            $file_dir = $mypath . "".$c."".$m.".csv";
                          if (!file_exists($file_dir))
                          {
                            echo "does not";
                                    file_put_contents( $file_dir, $attachment['attachment']);




                                    $to = "siyabonga@unqobe.co.za";
      $from = "info@inflexionbi.com";
      $subject = "Compiled Paygate Summary";
      $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
      <html xmlns='http://www.w3.org/1999/xhtml'>
      	<head>

      		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      		<meta name='viewport' content='width=device-width, initial-scale=1.0' />
      		<style type='text/css'>
      			* {
      				-ms-text-size-adjust:100%;
      				-webkit-text-size-adjust:none;
      				-webkit-text-resize:100%;
      				text-resize:100%;
      			}
      			a{
      				outline:none;
      				color:#40aceb;
      				text-decoration:underline;
      			}
      			a:hover{text-decoration:none !important;}
      			.nav a:hover{text-decoration:underline !important;}
      			.title a:hover{text-decoration:underline !important;}
      			.title-2 a:hover{text-decoration:underline !important;}
      			.btn:hover{opacity:0.8;}
      			.btn a:hover{text-decoration:none !important;}
      			.btn{
      				-webkit-transition:all 0.3s ease;
      				-moz-transition:all 0.3s ease;
      				-ms-transition:all 0.3s ease;
      				transition:all 0.3s ease;
      			}
      			table td {border-collapse: collapse !important;}
      			.ExternalClass, .ExternalClass a, .ExternalClass span, .ExternalClass b, .ExternalClass br, .ExternalClass p, .ExternalClass div{line-height:inherit;}
      			@media only screen and (max-width:500px) {
      				table[class='flexible']{width:100% !important;}
      				table[class='center']{
      					float:none !important;
      					margin:0 auto !important;
      				}
      				*[class='hide']{
      					display:none !important;
      					width:0 !important;
      					height:0 !important;
      					padding:0 !important;
      					font-size:0 !important;
      					line-height:0 !important;
      				}
      				td[class='img-flex'] img{
      					width:100% !important;
      					height:auto !important;
      				}
      				td[class='aligncenter']{text-align:center !important;}
      				th[class='flex']{
      					display:block !important;
      					width:100% !important;
      				}
      				td[class='wrapper']{padding:0 !important;}
      				td[class='holder']{padding:30px 15px 20px !important;}
      				td[class='nav']{
      					padding:20px 0 0 !important;
      					text-align:center !important;
      				}
      				td[class='h-auto']{height:auto !important;}
      				td[class='description']{padding:30px 20px !important;}
      				td[class='i-120'] img{
      					width:120px !important;
      					height:auto !important;
      				}
      				td[class='footer']{padding:5px 20px 20px !important;}
      				td[class='footer'] td[class='aligncenter']{
      					line-height:25px !important;
      					padding:20px 0 0 !important;
      				}
      				tr[class='table-holder']{
      					display:table !important;
      					width:100% !important;
      				}
      				th[class='thead']{display:table-header-group !important; width:100% !important;}
      				th[class='tfoot']{display:table-footer-group !important; width:100% !important;}
      			}
      		</style>
      	</head>
      	<body style='margin:0; padding:0;' bgcolor='#eaeced'>
      		<table style='min-width:320px;' width='100%' cellspacing='0' cellpadding='0' bgcolor='#eaeced'>

      			<tr>
      				<td class='wrapper' style='padding:0 10px;'>

      					<table data-module='module-6'  width='100%' cellpadding='0' cellspacing='0'>
      						<tr>
      							<td data-bgcolor='bg-module' bgcolor='#eaeced'>
      								<table class='flexible' width='600' align='center' style='margin:0 auto;' cellpadding='0' cellspacing='0'>
      									<tr>
      										<td data-bgcolor='bg-block' class='holder' style='padding:64px 60px 50px;' bgcolor='#f9f9f9'>
      											<table width='100%' cellpadding='0' cellspacing='0'>
      												<tr>
      													<td data-color='title' data-size='size title' data-min='20' data-max='40' data-link-color='link title color' data-link-style='text-decoration:none; color:#292c34;' class='title' align='center' style='font:30px/33px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 23px;'>
      														Hi Siya
      													</td>
      												</tr>
      												<tr>
      													<td data-color='text' data-size='size text' data-min='10' data-max='26' data-link-color='link text color' data-link-style='font-weight:bold; text-decoration:underline; color:#40aceb;' align='center' style='font:16px/29px Arial, Helvetica, sans-serif; color:#888; padding:0 0 21px;'>
      														I have just received another email from Paygate, review the compiled csv file on the link below.
      													</td>
      												</tr>
      												<tr>
      													<td style='padding:0 0 20px;'>
      														<table width='232' align='center' style='margin:0 auto;' cellpadding='0' cellspacing='0'>
      															<tr>
      																<td data-bgcolor='bg-button'  data-size='size button' data-min='10' data-max='20' class='btn' align='center' style='font:bold 16px/18px Arial, Helvetica, sans-serif; color:#f9f9f9; text-transform:uppercase; mso-padding-alt:22px 10px; border-radius:3px;' bgcolor='#a3cd39'>
      																	<a target='_blank' style='text-decoration:none; color:#f9f9f9; display:block; padding:22px 10px;' href='http://inflexionbi.com/m/read/004H'>Download File</a>
      																</td>
      															</tr>
      														</table>
      													</td>
      												</tr>
      											</table>
      										</td>
      									</tr>
      									<tr><td height='28'></td></tr>
      								</table>
      							</td>
      						</tr>
      					</table>
      					<!-- module 7 -->

      				</td>
      			</tr>
      			<!-- fix for gmail -->
      			<tr>
      				<td style='line-height:0;'><div style='display:none; white-space:nowrap; font:15px/1px courier;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></td>
      			</tr>
      		</table>
      	</body>
      </html>
";
      $headers = "From: info@inflexionbi.com" . "\r\n" .
"CC:  Kalvin@debtin.co.za \n";
      $headers .= "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\n";


      if(mail($to,$subject,$message,$headers)){
         echo "Success";
      }else{
        echo "Oops";
      }


                        }else{
                           echo  "exists";
                        }

                     }

                 }
              //   imap_

      // imap_setflag_full($imap, $i, "\\Seen");
   //imap_mail_move($imap, $m,'INBOX.Junk',CP_UID);
    //   imap_delete($imap,$m);
    //  imap_mail_copy($imap,'1','Junk');


    }
    //imap_expunge($imap);
    imap_close($imap);

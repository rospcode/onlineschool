<?php

$imap = imap_open('{cp47-jhb.za-dns.com:143/notls}', 'info@sdug.co.za', '*=UA5Z{N5J') or die("imap connection error");
 $message_count = imap_num_msg($imap);

 $servername = "localhost";
$username = "sdugcoza_sdug_zimo";
$password = "1Siyabonga.";
$dbname = "sdugcoza_sdug_zimo";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

for ($m = 1; $m <= $message_count; ++$m){
  $header = imap_header($imap, $m);

  print_r($header);
  echo "<br/>";
    echo "<br/>";
      echo "<br/>";
        echo "<br/>";

          echo "<br/>";
            echo "<br/>";

  $email[$m]['from'] = $header->from[0]->mailbox.'@'.$header->from[0]->host;
  $email[$m]['fromaddress'] = $header->from[0]->personal;
  $email[$m]['to'] = $header->to[0]->mailbox;
  $email[$m]['subject'] = $header->subject;
  $email[$m]['message_id'] = $header->message_id;
  $email[$m]['date'] = $header->udate;

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
              if($structure->parts[$i]->encoding == 3) {
                  $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
              }
              elseif($structure->parts[$i]->encoding == 4) {
                  $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
              }
          }
      }
  }



}

 ?>

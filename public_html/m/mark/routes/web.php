<?php


Route::get('/read/004H', function () {
$url = "http://inflexionbi.com/attachments_zip_0/save.php";

 $file_name = basename($url);

 if(file_put_contents( $file_name,file_get_contents($url))) {

   $headers = array(
        'Content-Type' => 'text/csv',
    );


 return  response()->download($file_name,'master-paygate-'.\Carbon\Carbon::now().'.csv',$headers);
 }
 else {
 echo "File downloading failed.";
 }

});

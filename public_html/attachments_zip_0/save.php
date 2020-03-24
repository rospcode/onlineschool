<?php

$directory = "myfiles/*";
$c = 0;
$b = 0;
$handy = 1;
$mm = 0;

$month = "";
$month_tran = array_fill(0,count($directory),0);
$month_batch = array_fill(0,count($directory),0);
$month_inc = 0;

         $bn = 0;

$arra = array();
$cnt = 0;

$masterCSVFile = fopen('master_file.csv', "w+");
foreach(glob($directory) as $file) {

    $data = [];







    if (strpos($file, '.csv') !== false) {

        if (($handle = fopen($file, 'r')) !== false) {



            while (($dataValue = fgetcsv($handle, 1000)) !== false) {
                $data[] = $dataValue;

            }
        }

        fclose($handle);

        if(count($data) > 0) {

          if($cnt != 0){

          unset($data[0]);
}



            foreach ($data as $value) {
              try {

              if($cnt == 0 && $mm == 0){
                 $value[5] = "";
                 $value[6] = "";
                 $value[7] = "Month";
                 $value[8] = "Transaction Count";
                 $value[9] = "Batch Total";
                 $mm++;
              }


                   fwrite($masterCSVFile, implode(',', $value) . "\r\n");
                    if($bn == 0 ){

                     }else{
                        $c += $value[4];
                        $b += $value[3];

                        $string__name =substr($value[2],3,3);

                        if($string__name != $month){
                           $month = $string__name;
                                 $month_inc++;
                        }else if($string__name == $month){
                              $month_tran[$month_inc] = $value[3];
                              $month_batch[$month_inc] = $value[4];

                        }
                     }

                    $bn++;
              } catch (Exception $e) {
                 // echo $e->getMessage();
              }
            }



        } else {

        }

        $cnt++;

    } else {

    }

}

$array[0] = "";
$array[1] = "";
$array[2] = "Total";
$array[3] = $b;
$array[4] = $c;

    fwrite($masterCSVFile, implode(',', $array) . "\r\n");

    fclose($masterCSVFile);

// Close master CSV file

$marks = "";


$dolla = fopen('master_file.csv', 'r');
$dollas = fopen('muple.csv', 'w+');
$mon = "";
$g_count = 0;
   $datas = [];
while (($dataValue = fgetcsv($dolla, 1000)) !== false) {
  //array_search("mar",$dataValue);
   $datas[] = $dataValue;

}


unset($datas[0]);
unset($datas[count($datas)]);
$count_month = array();
$months_got = array();
$actual_trans_count = array();
$actual_batch_count = array();
$temp_man = "";
$glob_count = 0;
$arry_c = 0;
foreach($datas as $dat){
  if($glob_count == 0){
      $temp_man = substr($dat[2],3,3);
      $count_month[$arry_c] = 1;
      $months_got[$arry_c] =  substr($dat[2],3,3);
      $actual_trans_count[$arry_c] = $dat[3];
      $actual_batch_count[$arry_c] = $dat[4];


  }else{
    if(substr($dat[2],3,3) == $temp_man){

        $count_month[$arry_c] = $count_month[$arry_c] + 1;
          $actual_trans_count[$arry_c] += $dat[3];
          $actual_batch_count[$arry_c] += $dat[4];

    }else{
      $arry_c++;
      $temp_man =substr($dat[2],3,3);
      $count_month[$arry_c] = 1;
      $months_got[$arry_c] =  substr($dat[2],3,3);
        $actual_trans_count[$arry_c] = $dat[3];
        $actual_batch_count[$arry_c] = $dat[4];
    }
  }


$glob_count++;
}



$dippo = fopen('master_file.csv', 'r');
$depl = array();
$data_update = [];
while (($dataValues = fgetcsv($dippo, 1000)) !== false) {
$data_update[] = $dataValues;

}

$update_count = 0;
$inc = 0;

foreach($data_update as $update){
  //echo "yes";


if($inc != 0){
  if(isset($actual_batch_count[$update_count])){
    $update[5] = "";
    $update[6] = "";
    $update[7] = $months_got[$update_count];
    $update[8] = $actual_trans_count[$update_count];
    $update[9] = $actual_batch_count[$update_count];


  }
   $update_count++;
}
  fwrite($dollas, implode(',', $update) . "\r\n");
  $inc++;


}


fclose($dolla);
header("Location: muple.csv");
exit;
?>

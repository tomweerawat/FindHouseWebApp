<?php
require_once 'Functions.php';
$fun = new Functions();
$location = $_GET["price"];
  // var_export($location);exit();
if (!empty($_GET["price"])){
  $test = explode(",", $location);
  // $lat=$test[0]+1-1;
  // $lng=$test[1]+1-1;
  $proptype = $test[0];
  $price = $test[1];
  $ptype = $test[2];
 //
 //
 //  $a1 = 'ราคา 0 - 500000';
 //  $a2 ='ราคา 2000001 - 3000000';
 //  $a3 ='ราคา 1000001 - 1500000';
 //  $a4 ='ราคา 1500001 - 2000000';
 //  $a5 ='ราคา 2000001 - 3000000';
 //  $a6 ='ราคา 2000001 - 3000000';
 //  $a7 ='5000000 ขึ้นไป';
 //
 //  if($ptype = $a1){
 //  //  echo "string";
 //   $data = 1;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a2) {
 //   $data = 2;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a3) {
 //   $data =3 ;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a4) {
 //   $data = 4;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a5) {
 //   $data = 5;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a6) {
 //   $data = 6;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
 // elseif ($ptype = $a7) {
 //   echo "string";
 //   $data = 7;
 //   echo $fun -> getservice($data,$proptype,$ptype);
 // }
  // $price1 = "ราคา 1500001 - 2000000";
  if (strpos($ptype, '500000') !== false){

   $data = 1;
  echo $fun -> getservice($data,$proptype,$ptype);
  }
  else if(strpos($ptype, '500001') !== false){

   $data = 2;
  echo $fun -> getservice($data,$proptype,$ptype);
  }
  else if(strpos($ptype, '1000001') !== false){

   $data = 3;
  echo $fun -> getservice($data,$proptype,$ptype);
  }
  else if(strpos($ptype, '1500001') !== false){

   $data = 4;
     echo $fun -> getservice($data,$proptype,$ptype);
  }
  else if(strpos($ptype, '2000001') !== false){

   $data = 5;
  echo $fun -> getservice($data,$proptype,$ptype);
  }
  else if(strpos($ptype, '3000001') !== false){
   $data = 6;
     echo $fun -> getservice($data,$proptype,$ptype);

  }
  else if(strpos($ptype, '5000000') !== false) {
   echo "aaaaa".$ptype;
    $data = 7;
     echo $fun -> getservice($data,$proptype,$ptype);
  }
  else {
    echo "No Data";
  }
    // echo $fun -> getservice($data,$proptype,$ptype);


}
else{
  echo "N0, mail is not set";
}

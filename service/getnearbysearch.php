<?php

function dbcon(){
  $server='148.72.232.174:3306';
	$user='Notkak199412';
	$pass='0959518332';
	$dbname='findhouse';
	return new mysqli($server,$user,$pass,$dbname);
}
 $db = dbcon();

 $location = $_GET["location"];
 $test = explode(",", $location);
 $lat=$test[0]+1-1;
 $lng=$test[1]+1-1;

 $radius = $_GET["radius"];
mysqli_set_charset($db,"utf8");
$sql="SELECT *,
( 6371  * acos( cos( radians($lat) ) * cos( radians
  ( lat ) ) * cos( radians( lng ) - radians($lng) ) + sin( radians($lat) ) *
   sin( radians( lat ) ) ) ) AS distance FROM  property
   INNER JOIN address ON address.address_id = property.address_id
    INNER JOIN user ON user.user_id = property.user_id
   HAVING distance < $radius ORDER BY distance LIMIT 0 , 20";
// $sqlstr="SELECT * FROM address";

 $query=$db->query($sql);

 $result ['property'] = [];
 while ( $row = $query->fetch_assoc()) {
   $result2['property_id'] = $row['property_id'];
   $result2['contact'] = $row['first_name']." ".$row['last_name'];
   $result2['propertyname'] = $row['propertyname'];
   $result2['location'] = $row['house']." ".$row['number']." ".$row['road']." ".$row['subdistrict']." ".$row['district']." ".$row['province']." ".$row['zipcode'];
   $result2['status'] = $row['proptype'];
   $result2['price'] = $row['price'];
   $result2['description'] = $row['detail'];
   $result2['activation'] = $row['activation'];
   $result2['img1'] = "http://www.tnfindhouse.com/".$row['image'];
   $result2['img2'] = "http://www.tnfindhouse.com/".$row['image'];
   $result2['img3'] = "http://www.tnfindhouse.com/".$row['image'];
   $result2['img4'] = "http://www.tnfindhouse.com/".$row['image'];
   $result2['img5'] = "http://www.tnfindhouse.com/".$row['image'];
   $result2['lat'] = $row['lat'];
   $result2['lng'] = $row['lng'];
 // echo "</br>",$row['distance'];

  array_push($result['property'],$result2);
 // 	array_push($result['property'], "http://192.168.25.2:8181/FindHouse/".$row['Image']);
 }

 // $test['users']= $result;
 header('Content-Type: application/json;charset=utf-8');

 echo json_encode($result,true);
?>

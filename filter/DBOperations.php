     <?php
class DBOperations{
	 private $host = '148.72.232.174:3306';
	 private $user = 'Notkak199412';
	 private $db = 'findhouse';
	 private $pass = '0959518332';
	// private $host = 'localhost';
	// private $user = 'root';
	// private $db = 'findhouse';
	// private $pass = '1234';
	 private $conn;
public function __construct() {
	try{
		$this -> conn = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db, $this -> user, $this -> pass);
    $this-> conn->exec("set names utf8");
	}
		catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}

}


 public function getdataservice($data,$proptype,$ptype){
  //  var_export($data);exit();
   switch($data){
     case "1":
       $rate="`price`<500000";
       break;
     case "2":
       $rate="`price`>=500001 AND `price`<=1000000";
       break;
     case "3":
     //4900000
       $rate="`price`>=1000001 AND `price`<=2000000";
       break;
     case "4":
       $rate="`price`>=2000001 AND `price`<=3000000";
       break;
     case "5":
       $rate="`price`>=3000001 AND `price`<=4000000";
       break;
     case "6":
       $rate="`price`>=4000001 AND `price`<=5000000";
       break;
     case "7":
       $rate="`price`>=5000001";
       break;
   }

	 	$sql="SELECT *FROM property
  	INNER JOIN address ON address.address_id = property.address_id
   	INNER JOIN user ON user.user_id = property.user_id WHERE $rate ";
 		$query = $this -> conn -> query($sql);
		$result['property'] =[];
			 while ( $row = $query->fetch(PDO::FETCH_ASSOC)) {
 // echo "<pre>";var_export($row);exit();
 		  $result2['property_id'] = $row['property_id'];
		  $result2['contact'] = $row['first_name']." ".$row['last_name'];
      $result2['ptype'] = $row['ptype'];
		  $result2['propertyname'] = $row['propertyname'];
		  $result2['location'] = $row['house']." ".$row['number']." ".$row['road']." ".$row['subdistrict']." ".$row['district']." ".$row['province']." ".$row['zipcode'];
		  $result2['status'] = $row['proptype'];
		  $result2['price'] = number_format($row['price']);
		  $result2['description'] = $row['detail'];
		  $result2['activation'] = $row['activation'];
		  $result2['img1'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['img2'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['img3'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['img4'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['img5'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['lat'] = $row['lat'];
		  $result2['lng'] = $row['lng'];
      array_push($result['property'],$result2);
		}

			return $result;
 }

 public function checkUserExist($email){
    $sql = 'SELECT COUNT(*) from user WHERE email =:email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array('email' => $email));
    if($query){
        $row_count = $query -> fetchColumn();
        if ($row_count == 0){
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
 }


}

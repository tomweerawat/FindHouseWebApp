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

 public function checkLogin($email, $password) {
    $sql = 'SELECT * FROM user WHERE email = :email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array(':email' => $email));
    $data = $query -> fetchObject();
    $salt = $data -> salt;
    $db_encrypted_password = $data -> encrypted_password;
    if ($this -> verifyHash($password.$salt,$db_encrypted_password) ) {
        $user["first_name"] = $data -> first_name;
        $user["email"] = $data -> email;
        $user["unique_id"] = $data -> unique_id;
				$user["userimage"] = "http://www.tnfindhouse.com/".$data -> userimage;
          header('Content-Type: application/json;charset=utf-8');
        return $user;
    } else {
        return false;
    }
 }
 public function getdataservice(){
	 	$sql="SELECT *FROM property
  	INNER JOIN address ON address.address_id = property.address_id
   	INNER JOIN user ON user.user_id = property.user_id";

 		$query = $this -> conn -> query($sql);
		$result['property'] =[];
			 while ( $row = $query->fetch(PDO::FETCH_ASSOC)) {
 // echo "<pre>";var_export($row);exit();
 		  $result2['property_id'] = $row['property_id'];
		  $result2['contact'] = $row['first_name']." ".$row['last_name'];
		  $result2['propertyname'] = $row['propertyname'];
		  $result2['location'] = $row['house']." ".$row['number']." ".$row['road']." ".$row['subdistrict']." ".$row['district']." ".$row['province']." ".$row['zipcode'];
		  $result2['status'] = $row['proptype'];
		  $result2['price'] = number_format($row['price']);
		  $result2['description'] = $row['detail'];
		  $result2['activation'] = $row['activation'];
		  $result2['img1'] = "http://www.tnfindhouse.com/".$row['image'];
		  $result2['img2'] = "http://www.tnfindhouse.com/".$row['image1'];
		  $result2['img3'] = "http://www.tnfindhouse.com/".$row['image2'];
		  $result2['img4'] = "http://www.tnfindhouse.com/".$row['image3'];
		  $result2['img5'] = "http://www.tnfindhouse.com/".$row['image4'];
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
 public function getHash($password) {
     $salt = sha1(rand());
     $salt = substr($salt, 0, 10);
     $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
     $hash = array("salt" => $salt, "encrypted" => $encrypted);
     return $hash;
}
public function verifyHash($password, $hash) {
    return password_verify ($password, $hash);
}
}

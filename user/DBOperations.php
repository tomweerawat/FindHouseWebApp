<?php
class DBOperations{
	 private $host = '148.72.232.174:3306';
	 private $user = 'Notkak199412';
	 private $db = 'findhouse';
	 private $pass = '0959518332';
	 private $conn;
public function __construct() {
	try{
		$this -> conn = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db, $this -> user, $this -> pass);
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
				$user["userimage"] = "http://www.tnfindhouse.com".$data -> userimage;
				  header('Content-Type: application/json;charset=utf-8');
        return $user;
    } else {
        return false;
    }
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

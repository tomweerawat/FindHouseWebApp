<?php
require_once 'Functions.php';
$fun = new Functions();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $data = json_decode(file_get_contents("php://input"));
  if(isset($data -> operation)){
  	$operation = $data -> operation;
  	if(!empty($operation)){
  	 if ($operation == 'login') {
        if(isset($data -> user ) && !empty($data -> user) && isset($data -> user -> email) && isset($data -> user -> password)){
          $user = $data -> user;
          $email = $user -> email;
          $password = $user -> password;
          echo $fun -> loginUser($email, $password);
        } else {
          echo $fun -> getMsgInvalidParam();
        }
      }
  	}else{
  		echo $fun -> getMsgParamNotEmpty();
  	}
  } else {
  		echo $fun -> getMsgInvalidParam();
  }
} else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  echo "Hello Tom";
}

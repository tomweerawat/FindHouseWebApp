<?php
require_once 'DBOperations.php';
class Functions{
private $db;
public function __construct() {
      $this -> db = new DBOperations();
}


public function getservice($data,$proptype,$ptype){
  $db = $this -> db;
  $result =  $db -> getdataservice($data,$proptype,$ptype);
    // echo "<pre>";var_export($result);exit();
    header('Content-Type: application/json;charset=utf-8');
   return json_encode($result,true);
}

}

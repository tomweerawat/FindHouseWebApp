<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_login extends CI_Model{


  public function __construct()
  {
    parent::__construct();
  }

  public function get_data($email)
  {
    $sql=$this->db->select('*')
            ->from('user')
            ->where('email',$email);
    $sql= $this->db->get();
    if($sql->num_rows()==1){
      return $sql->result();
    }else{
      return false;
    }
  }
  public function verifyHash($password, $hash)
  {
    return password_verify ($password, $hash);
  }

  public function get_data_id($id)
  {
    $sql=$this->db->select('*')
            ->from('user')
            ->where('user_id',$id);
    $sql= $this->db->get();
    if($sql->num_rows()==1){
      return $sql->result();
    }else{
      return false;
    }
  }
}

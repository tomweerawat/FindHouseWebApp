<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_register extends CI_Model{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function insert($data)
  {
    $this->db->insert('user', $data);
		return TRUE;
  }
  public function getHash($password) {

      $salt = sha1(rand());
      $salt = substr($salt, 0, 10);
      $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
      $hash = array("salt" => $salt, "encrypted" => $encrypted);

      return $hash;
  }

  public function file_upload(){
    $config=array(
      'upload_path'=>"./uploads/userimg",
      'allowed_types'=>"gif|jpg|png",
      'max_size'=>"0",
      'overwrite'=>FALSE
    );
    $this->upload->initialize($config);
    // $name=$this->input->post('files');
    // echo $name; exit();
    if(!$this->upload->do_upload("userfile")){
      return false;
    }else{

      $data=$this->upload->data();
      return $data;
    }
}

}

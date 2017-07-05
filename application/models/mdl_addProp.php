<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_addProp extends CI_Model{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function file_upload(){
              $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);
                 for($i=0; $i<$cpt; $i++)
                {
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                 $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                 $_FILES['userfile']['size']= $files['userfile']['size'][$i];
               $this->upload->initialize($this->set_upload_options());
               $this->upload->do_upload();
                $fileName = $_FILES['userfile']['name'];
                 $images[] = $fileName;
  }
  $fileName = implode(',',$images);
  $filename1 = explode(',',$fileName);
  //echo "<pre>";print_r($filename1);exit;
  return $filename1;
  }
  private function set_upload_options(){
    // upload an image options
    $config = array();
    $config['upload_path'] = './uploads/files'; //give the path to upload the image in folder
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '0';
    $config['overwrite'] = FALSE;
    return $config;
  }

  public function insert_address($data){
    $insert=$this->db->insert('address',$data);
    if(!$insert){
      echo "error on insert address";
    }else{
      $result=$this->db->insert_id();
      return $result;
    }
  }

  public function insert_property($data){
    $insert=$this->db->insert('property',$data);
    if(!$insert){
      echo "error on insert address";
    }else{
      $result=$this->db->insert_id();
      return $result;
    }
  }

  public function insert_img($data){
    $insert=$this->db->insert('image',$data);
    if(!$insert){
      echo "error on insert address";
    }else{
      echo "ok";
    }
  }
}

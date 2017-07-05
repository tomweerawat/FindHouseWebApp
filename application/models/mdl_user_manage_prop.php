<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_user_manage_prop extends CI_Model{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function get_data($id){
    $sql="SELECT * FROM property WHERE user_id='$id' ORDER BY created DESC";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=array();
    }else{
      $data['rs']=$rs->result_array();
      $data['num_rows']=$rs->num_rows();
      // echo "<pre>";print_r($data);exit();
      return $data;
    // echo "<pre>";print_r($rs);exit;
    }
  }
  public function get_address($id){
    $sql="SELECT address_id FROM property WHERE property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=array();
    }else{
      $data['rs']=$rs->row_array();
      // echo "<pre>";print_r($data);exit();
      return $data;
    // echo "<pre>";print_r($rs);exit;
    }
  }

  public function get_row_data($id){
    $sql="SELECT * FROM property
    INNER JOIN address ON address.address_id = property.address_id
    WHERE property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=array();
    }else{
      $data['rs']=$rs->row_array();
      return $data;
    // echo "<pre>";print_r($rs);exit;
    }
  }

  public function get_image($id){
    $sql="SELECT img_index,img_part FROM image WHERE for_property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=array();
    }else{
      $data['rs']=$rs->result_array();
      $data['num_rows']=$rs->num_rows();
      //echo "<pre>";print_r($data);exit();
      return $data;

    }
  }
}

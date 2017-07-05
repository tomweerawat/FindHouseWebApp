<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class test_json extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    $this->db->join('address','address.address_id = property.address_id');
    // $this->db->join('image','image.for_property_id = property.property_id');
    $this->db->where('ptype',"บ้านเดี่ยว");
    $query = $this->db->get();
    $rs=$query->result_array();

    $img=$this->get_image($rs['0']['property_id']);
    $rs['img']=$img;
    echo json_encode($rs);exit();
    // echo "<pre>";print_r($rs);exit();
    // echo "<pre>";print_r($img);exit();
  }
  public function get_image($id){
    $sql="SELECT img_part FROM image WHERE for_property_id='$id'";
    $rs=$this->db->query($sql);
    $img=$rs->result_array();
    return $img;

  }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin_manage_prop extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_admin_manage_prop','amp');
  }

  public function index()
  {
    $rs_data=$this->amp->get_data();
    $c_rs=$rs_data['num_rows'];

    for($i=0;$i<$c_rs;$i++){
      $data['property_id'][$i]=$rs_data['rs'][$i]['property_id'];
      $data['propertyname'][$i]=$rs_data['rs'][$i]['propertyname'];
      $data['created'][$i]=$rs_data['rs'][$i]['created'];
      $data['activation'][$i]=$rs_data['rs'][$i]['activation'];
    }
    $data['c_rs']=$c_rs;
    $data['title']="ส่วนจัดการผู้ดูแล";
    $this->load->view('header', $data);
    $this->load->view('admin_manage_prop', $data);
    $this->load->view('footer');
  }

  public function edit($id){
    $rs_row=$this->amp->get_row_data($id);
    $rs_img=$this->amp->get_image($id);
    $session_arr['property_id']=$id;
    //echo "<pre>";print_r($session_arr);exit;
    $this->session->set_userdata($session_arr);
    $row_img=$rs_img['num_rows'];
    $data['num_rows']=$row_img;
    for($i=0;$i<$row_img;$i++){
      $data['pic'][$i]=$rs_img['rs'][$i]['img_part'];
      $data['index'][$i]=$rs_img['rs'][$i]['img_index'];
    }

    foreach ($rs_row as $r) {
      $data['property_id']=$r['property_id'];
      $data['user_id']=$r['user_id'];
      $data['address_id']=$r['address_id'];
      $data['proptype']=$r['proptype'];
      $data['ptype']=$r['ptype'];
      $data['propertyname']=$r['propertyname'];
      $data['detail']=$r['detail'];
      $data['ntype']=$r['ntype'];
      $data['ndetail']=$r['ndetail'];
      $data['price']=$r['price'];
      $data['rroom']=$r['rroom'];
      $data['broom']=$r['broom'];
      $data['activation']=$r['activation'];
      $data['created']=$r['created'];
      $data['province']=$r['province'];
      $data['district']=$r['district'];
      $data['subdistrict']=$r['subdistrict'];
      $data['house']=$r['house'];
      $data['number']=$r['number'];
      $data['road']=$r['road'];
      $data['zipcode']=$r['zipcode'];
      $data['lat']=$r['lat'];
      $data['long']=$r['lng'];
    }
      // echo "<pre>";print_r($data);exit;
      $data['title']="จัดการรายละเอียด";
      $this->load->view('header', $data);
      $this->load->view('admin_approve', $data);
      $this->load->view('footer');
  }

  public function admin_approve($id){
    $approve=$this->input->post('mydropdown');
    $data=array('activation' => $approve );
    $this->db->where('property_id',$id);
    $this->db->update('property',$data);
    $this->index();
  }
}

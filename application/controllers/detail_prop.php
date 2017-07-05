<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class detail_prop extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('googlemaps');
    $this->load->model('mdl_detail_prop','dp');
  }

  public function index($id)
  {
    $id_item=$id;
    $rs_img=$this->dp->get_image($id_item);
    $row_img=$rs_img['num_rows'];
    $data['num_rows']=$row_img;
    for($i=0;$i<$row_img;$i++){
      $data['pic'][$i]=$rs_img['rs'][$i]['img_part'];
    }
    $rs_data=$this->dp->get_data($id_item);
    foreach ($rs_data as $r) {
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
      $data['userimage']=$r['userimage'];
      $data['first_name']=$r['first_name'];
      $data['last_name']=$r['last_name'];
      $data['email']=$r['email'];
      $data['tel']=$r['tel'];
    }
    //$data['data']=$rs_data;
    $picture=$data['pic'][0];
    //create_map
    $center=$data['lat'].",".$data['long'];
    $cfg=array(
    'class'			=>'map-canvas',
    'map_div_id'	=>'map-canvas',
    'center'		=>$center,
    'zoom'			=>17,
    'places'		=>TRUE, //Aktifkan pencarian alamat
    );
    $this->googlemaps->initialize($cfg);

    $marker=array(
    'position'		=>$center,
    'title'			=>'Coba diDrag',
    'infowindow_content' => $data['propertyname']
    );
        $this->googlemaps->add_marker($marker);

    $data['map']=$this->googlemaps->create_map();
    //create_map
    $data['title']="แสดงรายละเอียด";
    // echo "<pre>";print_r($result_map);exit();
    $this->load->view('header', $data);
    $this->load->view('detail_prop' ,$data);
    $this->load->view('footer');
  }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_manage_prop extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('googlemaps');
    $this->load->model('mdl_user_manage_prop','ump');
    $this->load->model('mdl_addProp','ap');

  }
  public function index($id){
    $rs_data=$this->ump->get_data($id);
    $c_rs=$rs_data['num_rows'];

    for($i=0;$i<$c_rs;$i++){
      $data['property_id'][$i]=$rs_data['rs'][$i]['property_id'];
      $data['propertyname'][$i]=$rs_data['rs'][$i]['propertyname'];
      $data['created'][$i]=$rs_data['rs'][$i]['created'];
      $data['activation'][$i]=$rs_data['rs'][$i]['activation'];
    }
    $data['c_rs']=$c_rs;
// echo "<pre>";print_r($data);exit;
    $data['title']="จัดการรายการประกาศ";
    $this->load->view('header', $data);
    $this->load->view('user_manage_prop', $data);
    $this->load->view('footer');
  }
  public function edit($id){
    $rs_row=$this->ump->get_row_data($id);
    $rs_img=$this->ump->get_image($id);
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
      $data['finish_year']=$r['finish_year'];
      $data['area']=$r['area'];
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
    //create_map
    $center=$data['lat'].",".$data['long'];
    $cfg=array(
    'class'			=>'map-canvas',
    'map_div_id'	=>'map-canvas',
    'center'		=>$center,
    'zoom'			=>17,
    'places'		=>TRUE, //Aktifkan pencarian alamat
    'placesAutocompleteInputID'	=>'cari', //set sumber pencarian input
    'placesAutocompleteBoundsMap'	=>TRUE,
    'placesAutocompleteOnChange'	=>'showmap();'
    );
    $this->googlemaps->initialize($cfg);

    $marker=array(
    'position'		=>$center,
    'draggable'		=>TRUE,
    'title'			=>'Coba diDrag',
    'infowindow_content' => $data['propertyname'],
    'ondragend'		=>"document.getElementById('lat').value = event.latLng.lat();
                  document.getElementById('lng').value = event.latLng.lng();
                  showmap();",
    );
        $this->googlemaps->add_marker($marker);

    $data['map']=$this->googlemaps->create_map();
    //create_map
    // echo "<pre>";print_r($data);exit();
    $data['title']="จัดการรายละเอียด";
    $this->load->view('header', $data);
    $this->load->view('user_edit_prop', $data);
    $this->load->view('footer');
  }

  public function update($id){
    $dataproperty=array(
      'proptype' => $this->input->post('proptype'),
      'ptype' => $this->input->post('ptype'),
      'propertyname' => $this->input->post('propertyname'),
      'detail' => $this->input->post('detail'),
      'ntype' => $this->input->post('ntype'),
      'ndetail' => $this->input->post('ndetail'),
      'price' => $this->input->post('price'),
      'rroom' => $this->input->post('rroom'),
      'broom' => $this->input->post('broom'),
      'finish_year' => $this->input->post('finish_year'),
      'area' => $this->input->post('area')
    );
    $data_prop=array_filter($dataproperty);
    if(!empty($data_prop)){
      $this->db->where('property_id',$id);
      $this->db->update('property',$data_prop);
    }

    $dataaddress= array(
      'province' => $this->input->post('province'),
      'district' => $this->input->post('district'),
      'subdistrict' => $this->input->post('subdistrict'),
      'house' => $this->input->post('house'),
      'number' => $this->input->post('number'),
      'road' => $this->input->post('road'),
      'zipcode' => $this->input->post('zipcode'),
      'lat' => $this->input->post('lat'),
      'lng' => $this->input->post('lng')
    );
    $data_address=array_filter($dataaddress);
    $id_address=$this->ump->get_address($id);
    $id_add=$id_address['rs']['address_id'];
    // echo "<pre>";print_r($id_add);exit();
    if(!empty($data_address)){
      $this->db->where('address_id',$id_add);
      $this->db->update('address',$data_address);
    }
    $re_id=$this->session->userdata('uid');
    redirect(base_url('user_manage_prop/index/').$re_id);
    //  echo "<pre>";print_r($data_prop);print_r($data_address);exit();
  }
  public function delete($id){
    // echo "delete".$id;
    $sql="DELETE FROM property WHERE property_id='$id'";
    $this->db->query($sql);
    $re_id=$this->session->userdata('uid');
    redirect(base_url('user_manage_prop/index/').$re_id);
  }
  public function upload_img($id){
    $rs_img=$this->ap->file_upload();
    $c_img=count($rs_img);
    for($i=0;$i<$c_img;$i++){
      $dataimg=array(
        'for_property_id'=>$id,
        'img_part'=>'uploads/files/'.$rs_img[$i]
      );
      $this->ap->insert_img($dataimg);
    }
    $id_prop=$this->session->userdata('property_id');
  redirect(base_url('user_manage_prop/edit/').$id_prop);
  }
  public function delete_img($index){
    $id=$this->session->userdata('property_id');
    // echo $id,$index;exit;
    $get="SELECT img_part FROM image WHERE img_index='$index'";
    $get_name=$this->db->query($get);
    $name=$get_name->row_array();
    // echo "<pre>";print_r($name);exit;
    $sql="DELETE FROM image WHERE img_index='$index'";
    $this->db->query($sql);
    unlink($name['img_part']);
    redirect(base_url('user_manage_prop/edit/').$id);
  }
}

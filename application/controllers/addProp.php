<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class addProp extends CI_Controller{

  private $def_lat=13.746533;
  private $def_lng=100.5328842;
  public function __construct()
  {
    parent::__construct();
    $this->load->library('googlemaps');
    $this->load->model('mdl_addProp','ap');
  }
  public function index(){
    $center=$this->def_lat.",".$this->def_lng;
    $cfg=array(
    'class'			=>'map-canvas',
    'map_div_id'	=>'map-canvas',
    'center'		=>$center,
    'zoom'			=>9,
    'places'		=>TRUE, //Aktifkan pencarian alamat
    'placesAutocompleteInputID'	=>'cari', //set sumber pencarian input
    'placesAutocompleteBoundsMap'	=>TRUE,
    'placesAutocompleteOnChange'	=>'showmap();' //Aksi ketika pencarian dipilih
    );
    $this->googlemaps->initialize($cfg);

    $marker=array(
    'position'		=>$center,
    'draggable'		=>TRUE,
    'title'			=>'Coba diDrag',
    'ondragend'		=>"document.getElementById('lat').value = event.latLng.lat();
                  document.getElementById('lng').value = event.latLng.lng();
                  showmap();",
    );
        $this->googlemaps->add_marker($marker);

    $data['map']=$this->googlemaps->create_map();
    $data['lat']=$this->def_lat;
    $data['lng']=$this->def_lng;
    $data['title'] = "เพิ่มรายการประกาศ";
    $this->load->view('header', $data);
    $this->load->view('addProp', $data);
    $this->load->view('footer');
  }

  public function getData(){
    $id=$this->session->userdata('uid');
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
      'area' => $this->input->post('area'),
      'user_id' => $id
    );

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

    $data2=array_filter($dataaddress);
    $rs_address=$this->ap->insert_address($data2);

    $dataproperty['address_id']=$rs_address;
    $rs_img=$this->ap->file_upload();
    $dataproperty['image']='uploads/files/'.$rs_img['0'];
    $data1=array_filter($dataproperty);
    $rs_property=$this->ap->insert_property($data1);


    $c_img=count($rs_img);
    for($i=0;$i<$c_img;$i++){
      $dataimg=array(
        'for_property_id'=>$rs_property,
        'img_part'=>'uploads/files/'.$rs_img[$i]
      );
      $this->ap->insert_img($dataimg);
    }
    redirect(base_url('homepage'));
    //echo "<pre>";print_r($dataproperty);print_r($dataaddress);exit();
  }
}

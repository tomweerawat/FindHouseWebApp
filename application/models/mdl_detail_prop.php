<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_detail_prop extends CI_Model{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('googlemaps');
  }

  public function get_data($id){
    $sql="SELECT *
    FROM property
    INNER JOIN address ON address.address_id = property.address_id
     INNER JOIN user ON user.user_id = property.user_id
    WHERE property_id='$id'";
    //$sql="Select * from property where property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=array();
    }else{
      $data['rs']=$rs->row_array();
      return $data;
      //echo "<pre>";print_r($data);exit();
    }
  }

  public function get_image($id){
    $sql="SELECT img_part FROM image WHERE for_property_id='$id'";
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

  public function generate_map($lat,$lng){
    $center=$lat.",".$lng;
    $cfg=array(
    'class'			=>'map-canvas',
    'map_div_id'	=>'map-canvas',
    'center'		=>$center,
    'zoom'			=>17,
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
    $data['lat']=$lat;
    $data['lng']=$lng;
    return $data;
  }
}

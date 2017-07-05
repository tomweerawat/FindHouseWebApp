<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class fristpage extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_fristpage','mf');
    $this->load->library('googlemaps');
  }

  function load_map(){
    $config['center'] = '13.746533, 100.5328842';
    $config['zoom'] = '9';
    $this->googlemaps->initialize($config);
    $marker = array();
    $marker['position'] = '13.746533, 100.5328842';
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();
    return $data;
  }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class homepage extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_home_slide','mhs');
  }

  function index(){
    $data['totalRec'] = count($this->mhs->get_data());
    $data['posts'] = $this->mhs->get_data();
    $data['title']="หน้าหลัก";
    // echo "<pre>";print_r($data);exit();
    $this->load->view('header',$data);
    $this->load->view('search');
    $this->load->view('house_slide',$data);
    $this->load->view('townhouse_slide',$data);
    $this->load->view('condo_slide',$data);
    $this->load->view('land_slide',$data);
    $this->load->view('footer');
  }
}

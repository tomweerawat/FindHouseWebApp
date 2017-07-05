<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class search extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_search','mse');
    $this->load->library('Ajax_pagination');
    $this->perPage = 2;
  }
  public function index(){

    $ptype=$this->input->post('ptype');
    $price=$this->input->post('price');
    $proptype=$this->input->post('proptype');
    $dataSearch=array(
                      'ptype'=>$ptype,
                      'price'=>  $price,
                      'proptype'=>$proptype);
    // echo "<pre>"; print_r($dataSearch);exit();
    if($ptype=="0"&&$price=="0"&&$proptype=="0"){
          // echo "0";exit();
          $dataSearch['search_type']=0;
          $data['posts']=$this->mse->get_data($dataSearch);
          $data['title']="ค้นหาอสังหาริมทรัพย์";
          $this->load->view('header',$data);
          $this->load->view('search');
          $this->load->view('show_search',$data);
          $this->load->view('footer');
          // echo "<pre>"; print_r($data);exit();

        }
    else if ($ptype=="0"&&$price=="0"&&$proptype=="0") {
      // echo "1";exit();
      $dataSearch['search_type']=1;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price=="0"&&$proptype=="0") {
      // echo "2";exit();
      $dataSearch['search_type']=2;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price!="0"&&$proptype=="0") {
      // echo "3";exit();
      $dataSearch['search_type']=3;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price=="0"&&$proptype!="0") {
      // echo "4";exit();
      $dataSearch['search_type']=4;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price=="0"&&$proptype=="0") {
      // echo "5";exit();
      $dataSearch['search_type']=5;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price!="0"&&$proptype=="0") {
      // echo "6";exit();
      $dataSearch['search_type']=6;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price=="0"&&$proptype!="0") {
      // echo "7";exit();
      $dataSearch['search_type']=7;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price!="0"&&$proptype=="0") {
      // echo "8";exit();
      $dataSearch['search_type']=8;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price=="0"&&$proptype!="0") {
      // echo "9";exit();
      $dataSearch['search_type']=9;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price!="0"&&$proptype!="0") {
      // echo "10";exit();
      $dataSearch['search_type']=10;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price!="0"&&$proptype=="0") {
      // echo "11";exit();
      $dataSearch['search_type']=11;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price=="0"&&$proptype!="0") {
      // echo "12";exit();
      $dataSearch['search_type']=12;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price!="0"&&$proptype!="0") {
      // echo "13";exit();
      $dataSearch['search_type']=13;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype=="0"&&$price!="0"&&$proptype!="0") {
      // echo "14";exit();
      $dataSearch['search_type']=14;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
    else if ($ptype!="0"&&$price!="0"&&$proptype!="0") {
      // echo "15";exit();
      $dataSearch['search_type']=15;
      $data['posts']=$this->mse->get_data($dataSearch);
      $data['title']="ค้นหาอสังหาริมทรัพย์";
      $this->load->view('header',$data);
      $this->load->view('search');
      $this->load->view('show_search',$data);
      $this->load->view('footer');

    }
  }
}

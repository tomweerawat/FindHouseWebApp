<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class show_by_type extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_show_by_type','ms');
    $this->load->library('Ajax_pagination');
    $this->perPage = 2;
  }
// house
  public function sale_house(){
    $totalRec = count($this->ms->get_sale_house());
    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_sale_house/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $data['posts'] = $this->ms->get_sale_house(array('limit'=>$this->perPage));
    // echo "<pre>";print_r($rs_data);exit();
    $data['title']="บ้านเดี่ยว";
    $data['type']="house";
    $data['ptype']="sale";
    $this->load->view('header',$data);
    $this->load->view('show_by_type',$data);
    $this->load->view('footer');
  }

  function ajax_sale_house(){
      $conditions = array();
      $page = $this->input->post('page');
      if(!$page){
          $offset = 0;
      }else{
          $offset = $page;
      }
      $keywords = $this->input->post('keywords');
      $sortBy = $this->input->post('sortBy');
      if(!empty($keywords)){
          $conditions['search']['keywords'] = $keywords;
      }
      if(!empty($sortBy)){
          $conditions['search']['sortBy'] = $sortBy;
      }
      $totalRec = count($this->ms->get_sale_house($conditions));

      $config['target']      = '#postList';
      $config['base_url']    = base_url().'show_by_type/ajax_sale_house/';
      $config['total_rows']  = $totalRec;
      $config['per_page']    = $this->perPage;
      $config['link_func']   = 'searchFilter';
      $this->ajax_pagination->initialize($config);

      $conditions['start'] = $offset;
      $conditions['limit'] = $this->perPage;

      $data['posts'] = $this->ms->get_sale_house($conditions);
      $this->load->view('ajax_show', $data, false);
  }

  public function rent_house(){
    $totalRec = count($this->ms->get_rent_house());
    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_rent_house/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $data['posts'] = $this->ms->get_rent_house(array('limit'=>$this->perPage));
    // echo "<pre>";print_r($rs_data);exit();
    $data['title']="บ้านเดี่ยว";
    $data['type']="house";
    $data['ptype']="rent";
    $this->load->view('header',$data);
    $this->load->view('show_by_type',$data);
    $this->load->view('footer');
  }

  function ajax_rent_house(){
      $conditions = array();
      $page = $this->input->post('page');
      if(!$page){
          $offset = 0;
      }else{
          $offset = $page;
      }
      $keywords = $this->input->post('keywords');
      $sortBy = $this->input->post('sortBy');
      if(!empty($keywords)){
          $conditions['search']['keywords'] = $keywords;
      }
      if(!empty($sortBy)){
          $conditions['search']['sortBy'] = $sortBy;
      }
      $totalRec = count($this->ms->get_rent_house($conditions));

      $config['target']      = '#postList';
      $config['base_url']    = base_url().'show_by_type/ajax_rent_house/';
      $config['total_rows']  = $totalRec;
      $config['per_page']    = $this->perPage;
      $config['link_func']   = 'searchFilter';
      $this->ajax_pagination->initialize($config);

      $conditions['start'] = $offset;
      $conditions['limit'] = $this->perPage;

      $data['posts'] = $this->ms->get_rent_house($conditions);
      $this->load->view('ajax_show', $data, false);
  }
// house

// townhouse
public function sale_townhouse(){
  $totalRec = count($this->ms->get_sale_townhouse());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_sale_townhouse/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_sale_townhouse(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="ทาวน์เฮ้าส์";
  $data['type']="townhouse";
  $data['ptype']="sale";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_sale_townhouse(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_sale_townhouse($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_sale_townhouse/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_sale_townhouse($conditions);
    $this->load->view('ajax_show', $data, false);
}
public function rent_townhouse(){
  $totalRec = count($this->ms->get_rent_townhouse());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_rent_townhouse/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_rent_townhouse(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="ทาวน์เฮ้าส์";
  $data['type']="townhouse";
  $data['ptype']="rent";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_rent_townhouse(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_rent_townhouse($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_rent_townhouse/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_rent_townhouse($conditions);
    $this->load->view('ajax_show', $data, false);
}
// townhouse

// condo
public function sale_condo(){
  $totalRec = count($this->ms->get_sale_condo());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_sale_condo/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_sale_condo(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="คอนโดมิเนียม";
  $data['type']="condo";
  $data['ptype']="sale";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_sale_condo(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_sale_condo($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_sale_condo/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_sale_condo($conditions);
    $this->load->view('ajax_show', $data, false);
}

public function rent_condo(){
  $totalRec = count($this->ms->get_rent_condo());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_rent_condo/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_rent_condo(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="คอนโดมิเนียม";
  $data['type']="condo";
  $data['ptype']="rent";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_rent_condo(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_rent_condo($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_rent_condo/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_rent_condo($conditions);
    $this->load->view('ajax_show', $data, false);
}
// condo

// land
public function sale_land(){
  $totalRec = count($this->ms->get_sale_land());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_sale_land/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_sale_land(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="ที่ดิน";
  $data['type']="land";
  $data['ptype']="sale";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_sale_land(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_sale_land($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_sale_land/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_sale_land($conditions);
    $this->load->view('ajax_show', $data, false);
}

public function rent_land(){
  $totalRec = count($this->ms->get_rent_land());
  $config['target']      = '#postList';
  $config['base_url']    = base_url().'show_by_type/ajax_rent_land/';
  $config['total_rows']  = $totalRec;
  $config['per_page']    = $this->perPage;
  $config['link_func']   = 'searchFilter';
  $this->ajax_pagination->initialize($config);

  $data['posts'] = $this->ms->get_rent_land(array('limit'=>$this->perPage));
  // echo "<pre>";print_r($rs_data);exit();
  $data['title']="ที่ดิน";
  $data['type']="land";
  $data['ptype']="rent";
  $this->load->view('header',$data);
  $this->load->view('show_by_type',$data);
  $this->load->view('footer');
}

function ajax_rent_land(){
    $conditions = array();
    $page = $this->input->post('page');
    if(!$page){
        $offset = 0;
    }else{
        $offset = $page;
    }
    $keywords = $this->input->post('keywords');
    $sortBy = $this->input->post('sortBy');
    if(!empty($keywords)){
        $conditions['search']['keywords'] = $keywords;
    }
    if(!empty($sortBy)){
        $conditions['search']['sortBy'] = $sortBy;
    }
    $totalRec = count($this->ms->get_rent_land($conditions));

    $config['target']      = '#postList';
    $config['base_url']    = base_url().'show_by_type/ajax_rent_land/';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;

    $data['posts'] = $this->ms->get_rent_land($conditions);
    $this->load->view('ajax_show', $data, false);
}
// land
}

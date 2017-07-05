<?php
class late_prop extends CI_Controller {

 function __construct()
 {
  parent::__construct();

  $this->load->model('mdl_late_prop','lp');
  $this->load->helper('url');
  $this->load->library('pagination');
  $this->load->library('googlemaps');
 }

 function index($start=0)
 {

  $config['base_url']   = site_url('late_prop/index');
  $config['total_rows'] = $this->lp->select_total_rows();
  $config['per_page']   = 6;
  $config['full_tag_open'] = '<div id="pagination">';
  $config['full_tag_close'] = '</div>';
  $config['full_tag_open']='<nav aria-label="Page navigation"><ul class="pagination">';
  $config['full_tag_close']='</ul></nav>';

  $config['cur_tag_open']='<li class="disabled"><a href="#">';
  $config['cur_tag_close']='</a></li>';

  $config['num_tag_open']='<li>';
  $config['num_tag_close']='</li>';

  $config['first_links']='First';
  $config['first_tag_open']='<li>';
  $config['first_tag_close']='</li>';

  $config['last_links']='Last';
  $config['last_tag_open']='<li>';
  $config['last_tag_close']='</li>';

  $config['prev_links']='<span aria-hidden="true">&laquo;</span>';
  $config['prev_tag_open']='<li>';
  $config['prev_tag_close']='</li>';

  $config['next_links']='<span aria-hidden="true">&raquo;</span>';
  $config['next_tag_open']='<li>';
  $config['next_tag_close']='</li>';

  $start_row = ($start==0)?6:$config['per_page'];
  $per_page = ($start==0)?0:$start;

  //+ Data
  $data['rs_word'] = $this->lp->select_all($start_row , $per_page);

  $this->pagination->initialize($config);
  $data['pagination'] = $this->pagination->create_links();
  $data['title'] = "Home";
  $data['alert']=false;
  $this->load->view('header', $data);
  $this->load->view('search');
  // if ($this->input->post('ajax')) {
  //   $this->load->view('ajax_index', $data);
  // } else {
  //   $this->load->view('late_prop', $data);
  // }
  $this->load->view('footer');
 }



}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_home_slide extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }

  public function get_data(){
    $type=array(
                  'activation'=>'yes'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->where($type);
    $query = $this->db->get();
    $rs=$query->result_array();
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
}

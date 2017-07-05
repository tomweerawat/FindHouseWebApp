<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_search extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }
  public function get_data($data){
    switch($data['price']){
      case "1":
        $rate="`price`<500000";
        break;
      case "2":
        $rate="`price`>=500001 AND `price`<=1000000";
        break;
      case "3":
        $rate="`price`>=1000001 AND `price`<=2000000";
        break;
      case "4":
        $rate="`price`>=2000001 AND `price`<=3000000";
        break;
      case "5":
        $rate="`price`>=3000001 AND `price`<=4000000";
        break;
      case "6":
        $rate="`price`>=4000001 AND `price`<=5000000";
        break;
      case "7":
        $rate="`price`>=5000001";
        break;
    }
    //echo "<pre>"; print_r($data);exit();
    if($data['search_type']==0){
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
            echo json_encode($rs,true);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==1) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $query = $this->db->get();
        $rs=$query->result_array();
        //echo "<pre>";print_r($rs);exit();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==2) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('ptype',$data['ptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        //echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==3) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->where($rate);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==4) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==5) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where('ptype',$data['ptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==6) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where($rate);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==7) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==8) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('ptype',$data['ptype']);
        $this->db->where($rate);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==9) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('ptype',$data['ptype']);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==10) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where($rate);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==10) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where($rate);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==11) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where('ptype',$data['ptype']);
        $this->db->where($rate);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==12) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where('ptype',$data['ptype']);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==13) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('ptype',$data['ptype']);
        $this->db->where($rate);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==14) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where($rate);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }
      elseif ($data['search_type']==15) {
        $this->db->select('*');
        $this->db->from('property');
        $this->db->join('user','user.user_id = property.user_id');
        $this->db->join('address','address.address_id = property.address_id');
        $this->db->where('province',$data['province']);
        $this->db->where('ptype',$data['ptype']);
        $this->db->where($rate);
        $this->db->where('proptype',$data['proptype']);
        $query = $this->db->get();
        $rs=$query->result_array();
        // echo "<pre>";print_r($rs);exit();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
      }


  }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_show_by_type extends CI_Model{


  public function __construct()
  {
    parent::__construct();

  }
// SALE
  public function get_sale_house($params = array()){
    $type=array(
                  'ptype'=>'บ้านเดี่ยว',
                  'proptype'=>'ขาย'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    //filter data by searched keywords
    if(!empty($params['search']['keywords'])){
        $this->db->like('propertyname',$params['search']['keywords']);
    }
    //sort data by ascending or desceding order
    if(!empty($params['search']['sortBy'])){
        $this->db->order_by('created',$params['search']['sortBy']);
    }else{
        $this->db->order_by('created','desc');
    }
    //set start and limit
    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit'],$params['start']);
    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit']);
    }
    $this->db->where($type);
    //get records
    $query = $this->db->get();
    $rs=$query->result_array();
    //echo "<pre>";print_r($rs);exit();
    //return fetched data
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }

  public function get_sale_townhouse($params = array()){
    $type=array(
                  'ptype'=>'ทาวน์เฮ้าส์',
                  'proptype'=>'ขาย'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    //filter data by searched keywords
    if(!empty($params['search']['keywords'])){
        $this->db->like('propertyname',$params['search']['keywords']);
    }
    //sort data by ascending or desceding order
    if(!empty($params['search']['sortBy'])){
        $this->db->order_by('created',$params['search']['sortBy']);
    }else{
        $this->db->order_by('created','desc');
    }
    //set start and limit
    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit'],$params['start']);
    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit']);
    }
    $this->db->where($type);
    //get records
    $query = $this->db->get();
    $rs=$query->result_array();
    //echo "<pre>";print_r($rs);exit();
    //return fetched data
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }

  public function get_sale_condo($params = array()){
    $type=array(
                  'ptype'=>'คอนโด',
                  'proptype'=>'ขาย'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    //filter data by searched keywords
    if(!empty($params['search']['keywords'])){
        $this->db->like('propertyname',$params['search']['keywords']);
    }
    //sort data by ascending or desceding order
    if(!empty($params['search']['sortBy'])){
        $this->db->order_by('created',$params['search']['sortBy']);
    }else{
        $this->db->order_by('created','desc');
    }
    //set start and limit
    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit'],$params['start']);
    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit']);
    }
    $this->db->where($type);
    //get records
    $query = $this->db->get();
    $rs=$query->result_array();
    //echo "<pre>";print_r($rs);exit();
    //return fetched data
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }

  public function get_sale_land($params = array()){
    $type=array(
                  'ptype'=>'ที่ดิน',
                  'proptype'=>'ขาย'
    );
    $this->db->select('*');
    $this->db->from('property');
    $this->db->join('user','user.user_id = property.user_id');
    //filter data by searched keywords
    if(!empty($params['search']['keywords'])){
        $this->db->like('propertyname',$params['search']['keywords']);
    }
    //sort data by ascending or desceding order
    if(!empty($params['search']['sortBy'])){
        $this->db->order_by('created',$params['search']['sortBy']);
    }else{
        $this->db->order_by('created','desc');
    }
    //set start and limit
    if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit'],$params['start']);
    }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
        $this->db->limit($params['limit']);
    }
    $this->db->where($type);
    //get records
    $query = $this->db->get();
    $rs=$query->result_array();
    //echo "<pre>";print_r($rs);exit();
    //return fetched data
    return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
// SALE

// RENT
public function get_rent_house($params = array()){
  $type=array(
                'ptype'=>'บ้านเดี่ยว',
                'proptype'=>'ให้เช่า'
  );
  $this->db->select('*');
  $this->db->from('property');
  $this->db->join('user','user.user_id = property.user_id');
  //filter data by searched keywords
  if(!empty($params['search']['keywords'])){
      $this->db->like('propertyname',$params['search']['keywords']);
  }
  //sort data by ascending or desceding order
  if(!empty($params['search']['sortBy'])){
      $this->db->order_by('created',$params['search']['sortBy']);
  }else{
      $this->db->order_by('created','desc');
  }
  //set start and limit
  if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit'],$params['start']);
  }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit']);
  }
  $this->db->where($type);
  //get records
  $query = $this->db->get();
  $rs=$query->result_array();
  //echo "<pre>";print_r($rs);exit();
  //return fetched data
  return ($query->num_rows() > 0)?$query->result_array():FALSE;
}

public function get_rent_townhouse($params = array()){
  $type=array(
                'ptype'=>'ทาวน์เฮ้าส์',
                'proptype'=>'ให้เช่า'
  );
  $this->db->select('*');
  $this->db->from('property');
  $this->db->join('user','user.user_id = property.user_id');
  //filter data by searched keywords
  if(!empty($params['search']['keywords'])){
      $this->db->like('propertyname',$params['search']['keywords']);
  }
  //sort data by ascending or desceding order
  if(!empty($params['search']['sortBy'])){
      $this->db->order_by('created',$params['search']['sortBy']);
  }else{
      $this->db->order_by('created','desc');
  }
  //set start and limit
  if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit'],$params['start']);
  }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit']);
  }
  $this->db->where($type);
  //get records
  $query = $this->db->get();
  $rs=$query->result_array();
  //echo "<pre>";print_r($rs);exit();
  //return fetched data
  return ($query->num_rows() > 0)?$query->result_array():FALSE;
}

public function get_rent_condo($params = array()){
  $type=array(
                'ptype'=>'คอนโด',
                'proptype'=>'ให้เช่า'
  );
  $this->db->select('*');
  $this->db->from('property');
  $this->db->join('user','user.user_id = property.user_id');
  //filter data by searched keywords
  if(!empty($params['search']['keywords'])){
      $this->db->like('propertyname',$params['search']['keywords']);
  }
  //sort data by ascending or desceding order
  if(!empty($params['search']['sortBy'])){
      $this->db->order_by('created',$params['search']['sortBy']);
  }else{
      $this->db->order_by('created','desc');
  }
  //set start and limit
  if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit'],$params['start']);
  }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit']);
  }
  $this->db->where($type);
  //get records
  $query = $this->db->get();
  $rs=$query->result_array();
  //echo "<pre>";print_r($rs);exit();
  //return fetched data
  return ($query->num_rows() > 0)?$query->result_array():FALSE;
}

public function get_rent_land($params = array()){
  $type=array(
                'ptype'=>'ที่ดิน',
                'proptype'=>'ให้เช่า'
  );
  $this->db->select('*');
  $this->db->from('property');
  $this->db->join('user','user.user_id = property.user_id');
  //filter data by searched keywords
  if(!empty($params['search']['keywords'])){
      $this->db->like('propertyname',$params['search']['keywords']);
  }
  //sort data by ascending or desceding order
  if(!empty($params['search']['sortBy'])){
      $this->db->order_by('created',$params['search']['sortBy']);
  }else{
      $this->db->order_by('created','desc');
  }
  //set start and limit
  if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit'],$params['start']);
  }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
      $this->db->limit($params['limit']);
  }
  $this->db->where($type);
  //get records
  $query = $this->db->get();
  $rs=$query->result_array();
  //echo "<pre>";print_r($rs);exit();
  //return fetched data
  return ($query->num_rows() > 0)?$query->result_array():FALSE;
}
// RENT
}

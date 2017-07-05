<?php
class mdl_late_prop extends CI_Model {

 function __construct()
 {
  parent::__construct();
 }

 function select_total_rows(){
  $this->db->select('*');
  $this->db->from('property');
  return $this->db->get()->num_rows();
 }

 function select_all($start_row, $total_rows){
  $this->db->select('*');
  $this->db->from('property');
  $this->db->limit($start_row, $total_rows);
  $this->db->order_by('created DESC');
  return $this->db->get();
 }

 function select_image($id){
   $sql="SELECT img_part FROM image WHERE for_property_id='$id'";
   $rs=$this->db->query($sql);
   if($rs->num_rows()==0){
     return $data=array();
   }else{
     return $data['rs']=$rs->result_array();
   }
 }

}

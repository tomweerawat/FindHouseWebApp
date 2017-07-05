<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_edit_profile extends CI_Model{


  public function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
  }

  public function do_upload(){
    $config=array(
      'upload_path'=>"./uploads/userimg",
      'allowed_types'=>"gif|jpg|png",
      'max_size'=>"0",
      'overwrite'=>FALSE
    );
    $this->upload->initialize($config);
    if(!$this->upload->do_upload("userfile")){
      return FALSE;
    }else{
      $data=$this->upload->data();
      return $data;
      }
  }

  public function update($data){
    $id=$data['uid'];
    $img=$data['userimage'];
    $result=$this->get_img_name($id);
    if($result){
      foreach ($result as $row) {
        $session_arr = array(
          'uid'=>$row->user_id,
          'name'=>$row->first_name,
          'img'=>$row->userimage,
          'permission'=>$row->permission,
          'is_login'=> true
        );
      }
    }else{
      echo "error";
    }
    // echo $name; exit();
    $sql="UPDATE user SET userimage= '$img' where user_id='$id'";
    $rs=$this->db->query($sql);
    if($rs==false){
      return FALSE;
    }else{
      $session_arr['img']=$img;
      $this->session->set_userdata($session_arr);
      return TRUE;
    }

  }

  public function get_img_name($id){
    $deimg=$this->db->select('*')
            ->from('user')
            ->where('user_id',$id);
    $deimg= $this->db->get();
    if($deimg->num_rows()==1){
      return $deimg->result();
    }else{
      return false;
    }
  }

  public function update_data($data){
    $id=$data['id'];
    $name=$data['name'];
    $lname=$data['lname'];
    $tel=$data['tel'];
    if($data['name']==null){
      $name=$this->session->userdata('name');
    }

    if($data['lname']==null){
      $lname=$this->session->userdata('lname');
    }

    if($data['tel']==null){
      $tel=$this->session->userdata('tel');
    }
    $sql="UPDATE user SET first_name='$name', last_name='$lname', tel='$tel' where user_id='$id'";
    $rs=$this->db->query($sql);
    if($rs==false){
      return FALSE;
    }else{
      $result=$this->get_img_name($id);
      if($result){
        foreach ($result as $row) {
          $session_arr = array(
            'uid'=>$row->user_id,
            'name'=>$row->first_name,
            'lname'=>$row->last_name,
            'tel'=>$row->tel,
            'img'=>$row->userimage,
            'permission'=>$row->permission,
            'is_login'=> true
          );
        }
        $this->session->set_userdata($session_arr);
        return TRUE;
    }
  }
  }
}

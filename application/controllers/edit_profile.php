<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class edit_profile extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_edit_profile','me');
    $this->load->library('upload');
  }

  public function edit_pic($id){
    $rsm=$this->me->do_upload();
    if($rsm==false){
      redirect(base_url('homepage'));
    }else{
      $img=$rsm['file_name'];
      $data['uid']=$id;
      $data['userimage']="uploads/userimg/".$img;
      //echo "<pre>"; print_r($dataregis); die();

      if(!$this->me->update($data)){
        echo "error";
      }else{
        redirect(base_url('homepage'));
      }
    }
  }

  public function edit_pro($id){
    $data=array(
      'id'=>$id,
      'name'=>$this->input->post('edit_fname'),
      'lname'=>$this->input->post('edit_lname'),
      'tel'=>$this->input->post('edit_telephone')
    );
    if($data['name']==null&&$data['lname']==null&&$data['tel']==null){
      redirect(base_url('homepage'));
    }else{
      $result=$this->me->update_data($data);

      if($result==FALSE){
        echo "error";
      }else{
        redirect(base_url('homepage'));
      }
    }

  }
}
